<?php

use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách màu sắc']], function () {
    Route::get('/danh-sach-mau-sac', [ColorController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm màu sắc']], function () {
    Route::get('/tao-moi', [ColorController::class, 'create'])->name('create');
    Route::post('/tao-moi', [ColorController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa màu sắc']], function () {
    Route::get('/chinh-sua/{color}', [ColorController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{color}', [ColorController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa màu sắc']], function () {
    Route::delete('/xoa/{color}', [ColorController::class, 'destroy'])->name('destroy');
});