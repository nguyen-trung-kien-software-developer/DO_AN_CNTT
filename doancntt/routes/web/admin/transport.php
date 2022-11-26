<?php

use App\Http\Controllers\Admin\TransportController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách vận chuyển']], function () {
Route::get('/danh-sach-van-chuyen', [TransportController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm vận chuyển']], function () {
Route::get('/tao-moi', [TransportController::class, 'create'])->name('create');
Route::post('/tao-moi', [TransportController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa vận chuyển']], function () {
Route::get('/chinh-sua/{transport}', [TransportController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{transport}', [TransportController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa vận chuyển']], function () {
Route::delete('/xoa/{transport}', [TransportController::class, 'destroy'])->name('destroy');
});