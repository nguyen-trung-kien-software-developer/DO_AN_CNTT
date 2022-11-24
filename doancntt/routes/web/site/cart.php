<?php

use App\Http\Controllers\Site\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/gio-hang.html', [CartController::class, 'show'])->name('show');

Route::post('/gio-hang.html', [CartController::class, 'create'])->name('create');

Route::put('/cap-nhat-gio-hang.html', [CartController::class, 'update'])->name('update');

Route::delete('/xoa-gio-hang.html', [CartController::class, 'destroy'])->name('destroy');