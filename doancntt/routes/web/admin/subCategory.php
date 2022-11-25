<?php

use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách danh mục phụ']], function () {
    Route::get('/danh-sach-danh-muc-phu', [SubCategoryController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm danh mục phụ']], function () {
    Route::get('/tao-moi', [SubCategoryController::class, 'create'])->name('create');
    Route::post('/tao-moi', [SubCategoryController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa danh mục phụ']], function () {
    Route::get('/chinh-sua/{subCategory}', [SubCategoryController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{subCategory}', [SubCategoryController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa danh mục phụ']], function () {
    Route::delete('/xoa/{subCategory}', [SubCategoryController::class, 'destroy'])->name('destroy');
});