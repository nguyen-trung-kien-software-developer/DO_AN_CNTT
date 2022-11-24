<?php

use App\Http\Controllers\Site\EmailVerificationController;
use Illuminate\Support\Facades\Route;

# Email Verification
Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth');

Route::get('/verify-email-for-customer/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware(['auth:customer', 'signed']);