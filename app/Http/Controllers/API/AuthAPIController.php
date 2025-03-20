<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;



class AuthAPIController extends Controller
{
    // Đăng kí tài khoản
    public function register(Request $request) {
        try {
            $request->validate([
                'hoten' => 'required|string|max:255|unique:khachhang',
                'email' => 'required|email|unique:khachhang',
                'matkhau' => [
                    'required',
                    'min:8',
                    'regex:/[A-Z]/',
                    'regex:/[a-z]/',
                    'regex:/[0-9]/',
                    'regex:/[\W]/',
                    'confirmed'
                ]
            ]);
    
            $user = User::create([
                'hoten' => $request->hoten,
                'email' => $request->email,
                'matkhau' => Hash::make($request->matkhau),
                'remember_token' => Str::random(60),
                'email_verified_at' => Carbon::now() // Hoặc null nếu chưa xác thực email
            ]);
    
            // Gửi email xác thực
            // Mail::to($user->email)->send(new VerifyEmailMail($user));
    
            return response()->json([
                'status' => 'success',
                'message' => 'Đăng ký thành công! Kiểm tra email để xác thực tài khoản.'
            ], 201);

        } catch (\Exception $e) {
            Log::error('Lỗi đăng ký: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Xác thực mail 
    public function verifyEmail($token) {
        $user = User::where('remember_token', $token)->first();
        if(!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token không hợp lệ!'
            ], 404);
        }
        $user->update(['email_verified_at' => now(), 'remember_token' => null]);
        return response()->json([
            'status' => 'success',
            'message' => 'Xác thực email thành công!'
        ], 200);
    }

    // Đăng nhập
    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'matkhau' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        
        if(!$user || !Hash::check($request->matkhau, $user->matkhau)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Thông tin đăng nhập không chính xác!'
            ], 401);
        }

        if(!$user->email_verified_at) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vui lòng xác thực email trước khi đăng nhập!'
            ], 403);
        }
        
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'token' => $token,
            'user' => $user
        ], 200);
    }


    // Đăng xuất
    public function logout(Request $request) {

        if($request->user()) {
            $request->user()->tokens()->delete();
            
            return response()->json([
                'status' => 'success',
                'message' => 'Đăng xuất thành công!'
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Không tìm thấy user đăng nhập'
        ], 401);
    }


    // Đổi mật khẩu
    public function changePassword(Request $request) {
    
        try {
            $request->validate([
                'matkhaucu' => 'required',
                'matkhaumoi' =>  [
                    'required',
                    'min:8',
                    'regex:/[A-Z]/',   // Ít nhất 1 chữ hoa
                    'regex:/[a-z]/',   // Ít nhất 1 chữ thường
                    'regex:/[0-9]/',   // Ít nhất 1 số
                    'regex:/[\W]/',    // Ít nhất 1 ký tự đặc biệt
                    'confirmed'
                ]
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Dữ liệu không hợp lệ!',
                'errors' => $e->errors() // Trả về danh sách lỗi
            ], 422);
        }

        $user = Auth::user();

        if(!Hash::check($request->matkhaucu, $user->matkhau)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mật khẩu hiện tại không đúng!',
            ], 400);
        }
        
        if(Hash::check($request->matkhaumoi, $user->matkhau)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mật khẩu mới không được trùng với mật khẩu cũ!',
            ], 400);
        }
        
        $user->update([
            'matkhau' => Hash::make($request->matkhaumoi),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Mật khẩu đã được cập nhật thành công!',
        ], 200);
    } 
    
    // Quên mật khẩu
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return response()->json([
            'message' => $status === Password::RESET_LINK_SENT ? 'Reset link sent' : 'Email not found'
        ], $status === Password::RESET_LINK_SENT ? 200 : 400);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return response()->json([
            'message' => $status === Password::PASSWORD_RESET ? 'Password has been reset' : 'Invalid token or email'
        ], $status === Password::PASSWORD_RESET ? 200 : 400);
    }
    
    public function getUserInfo(Request $request) {
        $user = Auth::user(); // Lấy thông tin user đang đăng nhập
    
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Không tìm thấy người dùng!'
            ], 404);
        }
    
        return response()->json([
            'status' => 'success',
            'user' => $user
        ], 200);
    }
    
}
