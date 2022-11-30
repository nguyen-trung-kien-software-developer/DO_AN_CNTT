<?php

use App\Http\Controllers\Admin\BranchController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách chi nhánh']], function () {
    Route::get('/danh-sach-chi-nhanh', [BranchController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm chi nhánh']], function () {
    Route::get('/tao-moi', [BranchController::class, 'create'])->name('create');
    Route::post('/tao-moi', [BranchController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa chi nhánh']], function () {
    Route::get('/chinh-sua/{branch}', [BranchController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{branch}', [BranchController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa chi nhánh']], function () {
    Route::delete('/xoa/{branch}', [BranchController::class, 'destroy'])->name('destroy');
});