<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;    
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class GoogleAPIController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleLogin(Request $request)
{
    try {
        // Lấy access_token từ request
        $accessToken = $request->access_token;

        // Gọi API của Google để lấy thông tin user
        $response = Http::get("https://www.googleapis.com/oauth2/v1/userinfo?access_token=$accessToken");

        if ($response->failed()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Token không hợp lệ hoặc đã hết hạn!'
            ], 401);
        }

        // Lấy thông tin user từ Google API
        $googleUser = $response->json();

        // Tìm user theo google_id
        $user = User::where('google_id', $googleUser['id'])->first();

        if (!$user) {
            $user = User::where('email', $googleUser['email'])->first();

            if ($user) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Email đã tồn tại!'
                ], 403);
            }

            // Nếu user chưa tồn tại, tạo mới
            $user = User::create([
                'name' => $googleUser['name'],
                'phone' => null,
                'email' => $googleUser['email'],
                'google_id' => $googleUser['id'],
                'password' => Hash::make(Str::random(16)),
            ]);
        }

        // Đăng nhập user
        Auth::login($user);
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng nhập thành công!',
            'token' => $token,
            'user' => $user
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Đăng nhập thất bại!',
            'error' => $e->getMessage()
        ], 500);
    }
}
}
