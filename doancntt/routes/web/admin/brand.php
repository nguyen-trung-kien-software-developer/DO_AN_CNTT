<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách thương hiệu']], function () {
    Route::get('/danh-sach-thuong-hieu', [BrandController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Xem mô tả thương hiệu']], function () {
    Route::get('/mo-ta/{brand}', [BrandController::class, 'description'])->name('description');
    Route::put('/mo-ta/{brand}', [BrandController::class, 'updateDescription'])->name('updateDescription');
});

Route::group(['middleware' => ['permission:Thêm thương hiệu']], function () {
    Route::get('/tao-moi', [BrandController::class, 'create'])->name('create');
    Route::post('/tao-moi', [BrandController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa thương hiệu']], function () {
    Route::get('/chinh-sua/{brand}', [BrandController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{brand}', [BrandController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa thương hiệu']], function () {
    Route::delete('/xoa/{brand}', [BrandController::class, 'destroy'])->name('destroy');
});