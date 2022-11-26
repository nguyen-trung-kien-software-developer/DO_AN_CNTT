<?php

use App\Http\Controllers\Admin\PageImageController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách hình ảnh sản phẩm']], function () {
    Route::get('/danh-sach-hinh-anh-san-pham', [ProductController::class, 'showAllImageItem'])->name('showAllImageItem');
});

Route::group(['middleware' => ['permission:Hiển thị danh sách hình ảnh trang thông tin']], function () {
    Route::get('/danh-sach-hinh-anh-cac-trang-thong-tin', [PageImageController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm hình ảnh trang thông tin']], function () {
    Route::get('/them-hinh-anh-vao-trang-thong-tin', [PageImageController::class, 'create'])->name('create');
    Route::post('/them-hinh-anh-vao-trang-thong-tin', [PageImageController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa hình ảnh trang thông tin']], function () {
    Route::get('/chinh-sua-hinh-anh-vao-trang-thong-tin/{pageImage}', [PageImageController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua-hinh-anh-vao-trang-thong-tin/{pageImage}', [PageImageController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa hình ảnh trang thông tin']], function () {
    Route::delete('/xoa/{pageImage}', [PageImageController::class, 'destroy'])->name('destroy');
});