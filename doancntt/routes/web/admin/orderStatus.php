<?php

use App\Http\Controllers\Admin\OrderStatusController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách tình trạng đơn hàng']], function () {
    Route::get('/danh-sach-tinh-trang-don-hang', [OrderStatusController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Chỉnh sửa tình trạng đơn hàng']], function () {
    Route::get('/chinh-sua/{orderStatus}', [OrderStatusController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{orderStatus}', [OrderStatusController::class, 'update'])->name('update');
});