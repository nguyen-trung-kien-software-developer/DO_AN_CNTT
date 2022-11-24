<?php

use App\Http\Controllers\Site\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/hoan-tat-don-hang.html', [PaymentController::class, 'checkout'])->name('checkout');

Route::post('/hoan-tat-don-hang.html', [PaymentController::class, 'proceed'])->name('proceed');

Route::get('/thanh-toan-thanh-cong/{order}', [PaymentController::class, 'success'])->name('success');