<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Chỉnh sửa các trang thông tin']], function () {
    Route::get('/chinh-sua/{page}', [PageController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{page}', [PageController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Hiển thị danh sách lịch sử']], function () {
    Route::get('/danh-sach-lich-su', [PageController::class, 'history'])->name('history');
});

Route::group(['middleware' => ['permission:Thêm lịch sử']], function () {
    Route::get('/tao-moi-lich-su', [PageController::class, 'createHistory'])->name('createHistory');
    Route::post('/tao-moi-lich-su', [PageController::class, 'storeHistory'])->name('storeHistory');
});

Route::group(['middleware' => ['permission:Chỉnh sửa lịch sử']], function () {
    Route::get('/chinh-sua-lich-su/{history}', [PageController::class, 'editHistory'])->name('editHistory');
    Route::put('/chinh-sua-lich-su/{history}', [PageController::class, 'updateHistory'])->name('updateHistory');
});

Route::group(['middleware' => ['permission:Xóa lịch sử']], function () {
    Route::delete('/xoa-lich-su/{history}', [PageController::class, 'destroyHistory'])->name('destroyHistory');
});