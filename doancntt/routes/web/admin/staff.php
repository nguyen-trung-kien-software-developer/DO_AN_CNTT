<?php

use App\Http\Controllers\Admin\StaffController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách thành viên']], function () {
    Route::get('/danh-sach-thanh-vien', [StaffController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Chỉnh sửa thành viên']], function () {
    Route::get('/chinh-sua/{user}', [StaffController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{user}', [StaffController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Thêm thành viên']], function () {
    Route::get('/tao-moi', [StaffController::class, 'create'])->name('create');
    Route::post('/tao-moi', [StaffController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Xóa thành viên']], function () {
    Route::delete('/xoa/{user}', [StaffController::class, 'destroy'])->name('destroy');
});