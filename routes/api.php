<?php


// use App\Http\Controllers\AuthAPIController;
// use App\Http\Controllers\ContactAPIController;
// use App\Http\Controllers\FavoriteAPIController;
// use App\Http\Controllers\GoogleAPIController;
// use App\Mail\VerifyEmailMail;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;


// Route::post('/register', [AuthAPIController::class, 'register']);
// Route::post('/verify-email/{token}', [AuthAPIController::class, 'verifyEmail']);
// Route::post('/login', [AuthAPIController::class, 'login']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthAPIController::class, 'logout']);
//     Route::put('/change-password', [AuthAPIController::class, 'changePassword']);
//     Route::get('/get-user-info', [AuthAPIController::class, 'getUserInfo']);
    
//     Route::post('/favorite/add', [FavoriteAPIController::class, 'add']);
//     Route::delete('/favorite/remove', [FavoriteAPIController::class, 'remove']);
//     Route::get('/favorite/list', [FavoriteAPIController::class, 'list']);
// });

// Route::get('/auth/google', [GoogleAPIController::class, 'redirectToGoogle']);
// Route::post('/auth/google/callback', [GoogleAPIController::class, 'handleGoogleLogin']);

// Route::post('/forgot-password', [AuthAPIController::class, 'forgotPassword']);
// Route::post('/reset-password', [AuthAPIController::class, 'resetPassword']);

// Route::post('/contact', [ContactAPIController::class, 'SendContactEmail']);

