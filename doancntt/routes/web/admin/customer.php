<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách khách hàng']], function () {
    Route::get('/danh-sach-khach-hang', [CustomerController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm khách hàng']], function () {
    Route::get('/tao-moi', [CustomerController::class, 'create'])->name('create');
    Route::post('/tao-moi', [CustomerController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa khách hàng']], function () {
    Route::get('/chinh-sua/{customer}', [CustomerController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{customer}', [CustomerController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa khách hàng']], function () {
    Route::delete('/xoa/{customer}', [CustomerController::class, 'destroy'])->name('destroy');
});