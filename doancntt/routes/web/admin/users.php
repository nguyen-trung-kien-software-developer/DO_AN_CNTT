<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/thong-tin-ca-nhan', [UserController::class, 'privateInformation'])->name('privateInformation');
    Route::post('/cap-nhat-thong-tin-ca-nhan', [UserController::class, 'updatePrivateInformation'])->name('updatePrivateInformation');
});