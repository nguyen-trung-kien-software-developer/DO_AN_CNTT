<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách tin tức']], function () {
    Route::get('/danh-sach-tin-tuc', [BlogController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Xem nội dung chi tiết tin tức']], function () {
    Route::get('/noi-dung-chi-tiet/{blog}', [BlogController::class, 'content'])->name('content');
    Route::put('/noi-dung-chi-tiet/{blog}', [BlogController::class, 'updateContent'])->name('updateContent');
});

Route::group(['middleware' => ['permission:Thêm tin tức']], function () {
    Route::get('/tao-moi', [BlogController::class, 'create'])->name('create');
    Route::post('/tao-moi', [BlogController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa tin tức']], function () {
    Route::get('/chinh-sua/{blog}', [BlogController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{blog}', [BlogController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa tin tức']], function () {
    Route::delete('/xoa/{blog}', [BlogController::class, 'destroy'])->name('destroy');
});