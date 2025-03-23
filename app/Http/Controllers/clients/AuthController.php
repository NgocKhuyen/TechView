<?php

namespace App\Http\Controllers\clients;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailMail;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function register() {
        return view('pages.register');
    }

    public function postRegister(Request $req) {
       
        $validated = $req->validate([
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|unique:khachhang',
            'password' => [
                'required',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[\W]/'
            ],
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::where('email', $req->email)->first();
        if(isset($user)) {
            return redirect()->back()->with('message', 'Email đã tồn tại, không thể đăng ký!');
        }

        $user = User::create([
            'hoten' => $validated['name'],
            'email' => $validated['email'],
            'matkhau' => Hash::make($validated['password']),
            'email_verified_at' => null
        ]);

        if ($user) {
            // Gửi email xác thực
            Mail::to($user->email)->send(new VerifyEmailMail($user));
             return redirect()->route('account.login')->with('message', 'Đăng ký thành công! Vui lòng kiểm tra email để xác thực tài khoản.');
        }
        
        return back()->with('message', 'Đăng ký thất bại, vui lòng thử lại.');

    }

    public function verifyEmail($id) {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return redirect()->route('account.login')->with('message', 'Tài khoản không tồn tại!');
        }
        if ($user->email_verified_at) {
            return redirect()->route('account.login')->with('message', 'Tài khoản đã được xác thực trước đó!');
        }
        $user->update(['email_verified_at' => Carbon::now()]);
        return redirect()->route('account.login')->with('message', 'Xác thực tài khoản thành công, Bạn có thể đăng nhập!');
    }

    public function login() {
        return view('pages.login');
    }
    public function postLogin(Request $req) {
        $email = $req->email;
        $password = $req->password;
        $remember = $req->remember;
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->matkhau)) {
            return back()->with('message', 'Email hoặc mật khẩu không đúng!');
        }
        if (!$user->email_verified_at) {
            return back()->with('message', 'Bạn cần xác thực email trước khi đăng nhập.');
        }
        // Đăng nhập người dùng
        Auth::login($user, $remember);
        return redirect()->route('index');

    }

    public function logout(Request $req) {
        if ($user = Auth::user()) {
            $user->update(['remember_token' => null]);
        }
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('account.login');
    }

    
    public function forget_password () {
        return view('pages.forget');
    }
    public function check_forget_password (Request $req) {
        
        $req->validate([
            'email' => 'required|email|exists:khachhang,email',
        ], [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',
            'email.exists' => 'Email không tồn tại trong hệ thống.',
        ]);

        $token = Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $req->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);
        Mail::send('emails.email-forget', ['token' => $token], function($message) use($req){
            $message->to($req->email);
            $message->subject('Đặt lại mật khẩu của bạn');
        });
        return back()->with('message', 'Đã gửi email đặt lại mật khẩu.');
    }


    public function reset_password ($token) {
        return view('pages.reset', ['token' => $token]);
    }
    
    public function check_reset_password (Request $req) {
        $req->validate([
            'new-password' =>  [
                'required',
                'min:8',
                'regex:/[A-Z]/',   // Ít nhất 1 chữ hoa
                'regex:/[a-z]/',   // Ít nhất 1 chữ thường
                'regex:/[0-9]/',   // Ít nhất 1 số
                'regex:/[\W]/',    // Ít nhất 1 ký tự đặc biệt
                'confirmed'
                ]
            ], [
                'new-password.required' => 'Vui lòng nhập mật khẩu mới.',
                'new-password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
                'new-password.regex' => 'Mật khẩu phải bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt.',
                'new-password.confirmed' => 'Xác nhận mật khẩu không khớp.'
            ]);
            
            $updatePass = DB::table('password_reset_tokens')
            ->where([
                'token' => $req->token
            ])
            ->first();
            
            User::where('email', $updatePass->email)->update([
                'matkhau' => Hash::make($req->input('new-password'))
            ]);
            
        DB::table('password_reset_tokens')->where('email', $updatePass->email)->delete();
        
        return redirect()->route('account.login')->with('message', 'Mật khẩu đã được đặt lại thành công!');
    }
    
    public function profile() {
        $user = Auth::user();  
        $orders = Order::where('id_khachhang', $user->id)->get();
        return view('pages.profile', compact('user', 'orders'));
    }

    public function changePassword(Request $req) {
        $req->validate([
            'old-password' => 'required',
            'new-password' => [
                'required',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[\W]/',
                function ($att, $value, $fail) {
                    if(Hash::check($value, Auth::user()->matkhau)) {
                        $fail('Mật khẩu mới không được trùng với mật khẩu cũ.');
                    }
                }
            ],
            'new-password_confirmation' => 'required|same:new-password',
        ], [
            'old-password.required' => 'Mật khẩu cũ không được để trống.',
            'new-password.required' => 'Mật khẩu mới không được để trống.',
            'new-password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'new-password.regex' => 'Mật khẩu phải chứa ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt.',
            'new-password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'new-password_confirmation.required' => 'Vui lòng nhập lại mật khẩu.',
            'new-password_confirmation.same' =>  'Xác nhận mật khẩu không khớp.'
        ]);

        if (!Hash::check($req->input('old-password'), Auth::user()->matkhau)) {
            return redirect()->back()->with('message', 'Mật khẩu cũ không đúng!');
        }
    
        Auth::user()->update([
            'matkhau' => Hash::make($req->new_password),
        ]);

        return redirect()->back()->with('message', 'Mật khẩu đã được thay đổi thành công!');
    }

    public function changeAvatar (Request $req) {
        $req->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ], [
            'avatar.required' => 'Vui lòng chọn một ảnh.',
            'avatar.image' => 'Tập tin phải là một hình ảnh.',
            'avatar.mimes' => 'Chỉ chấp nhận định dạng: jpeg, png, jpg, webp.',
            'avatar.max' => 'Dung lượng ảnh không được vượt quá 2MB.'
        ]);

        $user = Auth::user();  

        if ($user->hinh && file_exists(public_path('img/' . $user->hinh))) {
            unlink(public_path('img/' . $user->hinh));
        }

        $file = $req->file('avatar');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('img'), $fileName);
        return redirect()->back()->with('message', 'Cập nhật avatar thành công!');
    }

    public function updateProfile (Request $req) {
        // dd($req->all());
        $user = Auth::user();
        $req->validate([
            'name' => 'required|string|max:100',
            'birth' => 'nullable|date',
            'email' => 'required|email|unique:khachhang,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'gender' => 'nullable|string|in:nam,nu,khac',
            'address' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'name.required' => 'Họ tên không được để trống.',
            'name.max' => 'Họ tên không được vượt quá 100 ký tự.',
            'birth.date' => 'Ngày sinh không hợp lệ.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email này đã được sử dụng.',
            'phone.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
            'gender.in' => 'Giới tính phải là Nam, Nữ hoặc Khác.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'avatar.image' => 'Tệp tải lên phải là hình ảnh.',
            'avatar.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'avatar.max' => 'Ảnh không được lớn hơn 2MB.'
        ]);

        $user->hoten = $req['name'];
        $user->ngaysinh = $req['birth'];
        $user->email = $req['email'];
        $user->sodienthoai = $req['phone'];
        $user->gioitinh = $req['gender'];
        $user->diachi = $req['address'];

        if ($user->hinh && file_exists(public_path('img/' . $user->hinh))) {
            unlink(public_path('img/' . $user->hinh));
        }

        $file = $req->file('avatar');
        if ($file) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('img'), $fileName);
        } else {
            $fileName = null; 
        }
        $user->save();
        return redirect()->back()->with('message', 'Cập nhật hồ sơ thành công!');
    }
}
