<?php

use App\Http\Controllers\Admin\ParentCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách danh mục chính']], function () {
    Route::get('/danh-sach-danh-muc-chinh', [ParentCategoryController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm danh mục chính']], function () {
    Route::get('/tao-moi', [ParentCategoryController::class, 'create'])->name('create');
    Route::post('/tao-moi', [ParentCategoryController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa danh mục chính']], function () {
    Route::get('/chinh-sua/{parentCategory}', [ParentCategoryController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{parentCategory}', [ParentCategoryController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa danh mục chính']], function () {
    Route::delete('/xoa/{parentCategory}', [ParentCategoryController::class, 'destroy'])->name('destroy');
});