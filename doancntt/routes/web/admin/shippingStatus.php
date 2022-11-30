<?php

use App\Http\Controllers\Admin\ShippingStatusController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách tình trạng giao hàng']], function () {
    Route::get('/danh-sach-tinh-trang-giao-hang', [ShippingStatusController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Chỉnh sửa tình trạng giao hàng']], function () {
    Route::get('/chinh-sua/{shippingStatus}', [ShippingStatusController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{shippingStatus}', [ShippingStatusController::class, 'update'])->name('update');
});