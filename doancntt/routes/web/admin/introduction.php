<?php

use App\Http\Controllers\Admin\IntroductionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách bài giới thiệu']], function () {
    Route::get('/danh-sach-bai-gioi-thieu', [IntroductionController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Xem mô tả bài giới thiệu']], function () {
    Route::get('/mo-ta/{introduction}', [IntroductionController::class, 'description'])->name('description');
    Route::put('/mo-ta/{introduction}', [IntroductionController::class, 'updateDescription'])->name('updateDescription');
});

Route::group(['middleware' => ['permission:Xem nội dung bài giới thiệu']], function () {
    Route::get('/noi-dung/{introduction}', [IntroductionController::class, 'content'])->name('content');
    Route::put('/noi-dung/{introduction}', [IntroductionController::class, 'updateContent'])->name('updateContent');
});

Route::group(['middleware' => ['permission:Thêm bài giới thiệu']], function () {
    Route::get('/tao-moi', [IntroductionController::class, 'create'])->name('create');
    Route::post('/tao-moi', [IntroductionController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa bài giới thiệu']], function () {
    Route::get('/chinh-sua/{introduction}', [IntroductionController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{introduction}', [IntroductionController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa bài giới thiệu']], function () {
    Route::delete('/xoa/{introduction}', [IntroductionController::class, 'destroy'])->name('destroy');
});