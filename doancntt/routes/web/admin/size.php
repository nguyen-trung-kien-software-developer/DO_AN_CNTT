<?php

use App\Http\Controllers\Admin\SizeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách kích cỡ']], function () {
    Route::get('/danh-sach-kich-co', [SizeController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm kích cỡ']], function () {
    Route::get('/tao-moi', [SizeController::class, 'create'])->name('create');
    Route::post('/tao-moi', [SizeController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa kích cỡ']], function () {
    Route::get('/chinh-sua/{size}', [SizeController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{size}', [SizeController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa kích cỡ']], function () {
    Route::delete('/xoa/{size}', [SizeController::class, 'destroy'])->name('destroy');
});