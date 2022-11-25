<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách đơn hàng']], function () {
    Route::get('/danh-sach-don-hang', [OrderController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm đơn hàng']], function () {
    Route::get('/tao-moi', [OrderController::class, 'create'])->name('create');
    Route::post('/tao-moi', [OrderController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa đơn hàng']], function () {
    Route::get('/chinh-sua/{order}', [OrderController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{order}', [OrderController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa đơn hàng']], function () {
    Route::delete('/xoa/{order}', [OrderController::class, 'destroy'])->name('destroy');
});

Route::group(['middleware' => ['permission:Xem chi tiết đơn hàng']], function () {
    Route::get('/chi-tiet-don-hang/{order}', [OrderController::class, 'details'])->name('details');
    Route::get('/chi-tiet-hoa-don/{order}', [OrderController::class, 'billDetails'])->name('billDetails');
});