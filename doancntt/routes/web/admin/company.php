<?php

use App\Http\Controllers\Admin\CompanyController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị thông tin cửa hàng']], function () {
    Route::get('/thong-tin-cua-hang', [CompanyController::class, 'index'])->name('index');
    Route::put('/thong-tin-cua-hang/{company}', [CompanyController::class, 'update'])->name('update');
});