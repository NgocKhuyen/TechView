<?php

namespace App\Http\Controllers\clients;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public function profile() {
        return view('pages.profile');
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

}
