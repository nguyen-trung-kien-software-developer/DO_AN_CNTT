<?php

use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách slider']], function () {
    Route::get('/danh-sach-slider', [SliderController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm slider']], function () {
    Route::get('/tao-moi', [SliderController::class, 'create'])->name('create');
    Route::post('/tao-moi', [SliderController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa slider']], function () {
    Route::get('/chinh-sua/{slider}', [SliderController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{slider}', [SliderController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa slider']], function () {
    Route::delete('/xoa/{slider}', [SliderController::class, 'destroy'])->name('destroy');
});