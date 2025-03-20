<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('google_id', $user->id)->first();
            

            if($finduser){
                Auth::login($finduser);
                return redirect()->route('index');
            }

            $newUser = User::updateOrCreate(['email' => $user->email],[
                'hoten' => $user->name,
                'google_id'=> $user->id,
                'email_verified_at' => now() 
            ]);

            Auth::login($newUser);
            return redirect()->route('index');
            
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect()->route('account.login')->with('error', 'Có lỗi xảy ra khi đăng nhập bằng Google.');
        }

    }
}
