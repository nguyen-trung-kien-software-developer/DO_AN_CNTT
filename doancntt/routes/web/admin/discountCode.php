<?php

use App\Http\Controllers\Admin\DiscountCodeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách mã giảm giá']], function () {
    Route::get('/danh-sach-ma-giam-gia', [DiscountCodeController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm mã giảm giá']], function () {
    Route::get('/tao-moi', [DiscountCodeController::class, 'create'])->name('create');
    Route::post('/tao-moi', [DiscountCodeController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa mã giảm giá']], function () {
    Route::get('/chinh-sua/{discountCode}', [DiscountCodeController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{discountCode}', [DiscountCodeController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa mã giảm giá']], function () {
    Route::delete('/xoa/{discountCode}', [DiscountCodeController::class, 'destroy'])->name('destroy');
});