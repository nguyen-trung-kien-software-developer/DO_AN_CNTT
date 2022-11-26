<?php

use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách đánh giá']], function () {
    Route::get('/danh-sach-danh-gia', [CommentController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm đánh giá']], function () {
    Route::get('/tao-moi', [CommentController::class, 'create'])->name('create');
    Route::post('/tao-moi', [CommentController::class, 'store'])->name('store');
});

Route::post('/tao-moi/{product}', [CommentController::class, 'storeOfProduct'])->name('storeOfProduct');

Route::group(['middleware' => ['permission:Chỉnh sửa đánh giá']], function () {
    Route::get('/chinh-sua/{comment}', [CommentController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{comment}', [CommentController::class, 'update'])->name('update');
});