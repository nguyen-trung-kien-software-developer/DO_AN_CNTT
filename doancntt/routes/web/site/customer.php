<?php

use App\Http\Controllers\Site\CustomerController;
use App\Http\Controllers\Site\ForgotPasswordController;
use App\Http\Controllers\Site\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/dang-nhap.html', [CustomerController::class, 'login'])->name('login');

Route::get('/dang-ky.html', [CustomerController::class, 'register'])->name('register');

Route::post('/dang-nhap.html', [CustomerController::class, 'checkLogin'])->name('checkLogin');

Route::post('/dang-ky.html', [CustomerController::class, 'checkRegister'])->name('checkRegister');

Route::post('/dang-xuat.html', [CustomerController::class, 'logout'])->name('logout');

Route::get('/xac-thuc-tai-khoan.html', [CustomerController::class, 'verifyAccount'])->name('verifyAccount');

Route::middleware(['customerAuthentication'])->group(function () {
    Route::get('/thong-tin-tai-khoan.html', [CustomerController::class, 'accountInformation'])->name('accountInformation');

    Route::put('/thong-tin-tai-khoan.html', [CustomerController::class, 'updateAccountInformation'])->name('updateAccountInformation');

    Route::get('/thay-doi-mat-khau.html', [CustomerController::class, 'changePassword'])->name('changePassword');

    Route::put('/thay-doi-mat-khau.html', [CustomerController::class, 'updateChangePassword'])->name('updateChangePassword');

    Route::get('/lich-su-don-hang.html', [CustomerController::class, 'orderHistory'])->name('orderHistory');

    Route::get('/chi-tiet-don-hang/{order}', [CustomerController::class, 'orderDetails'])->name('orderDetails');
});

# Social Login
Route::get('login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);

#forgot password
Route::get('/quen-mat-khau.html', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/quen-mat-khau.html', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::put('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');