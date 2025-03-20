<?php

use App\Http\Controllers\clients\AuthController;
use App\Http\Controllers\clients\GoogleController;
use App\Http\Controllers\clients\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', [PageController::class, 'index'])->name('index');


Route::group(['prefix' => 'account', 'middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('account.logout');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('account.register');
    Route::post('/register', [AuthController::class, 'postRegister']);

    Route::get('/verify-email/{id}', [AuthController::class, 'verifyEmail'])->name('account.verifyemail');
    
    Route::get('/login', [AuthController::class, 'login'])->name('account.login');
    Route::post('/login', [AuthController::class, 'postLogin']);
    
    Route::get('/profile', [AuthController::class, 'profile'])->name('account.profile');
    Route::post('/profile', [AuthController::class, 'check_profile']);
    
    Route::get('/change-password', [AuthController::class, 'change_password'])->name('account.change_password');
    Route::post('/change-password', [AuthController::class, 'check_change_password']);
    
    Route::get('/forget-password', [AuthController::class, 'forget_password'])->name('account.forget_password');
    Route::post('/forget-password', [AuthController::class, 'check_forget_password']);

    Route::get('/reset-password/{token}', [AuthController::class, 'reset_password'])->name('account.reset_password');
    Route::post('/reset-password', [AuthController::class, 'check_reset_password'])->name('account.update_password');

});


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('account.reset_password');
