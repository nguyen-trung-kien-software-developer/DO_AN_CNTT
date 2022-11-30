<?php

use App\Http\Controllers\Admin\ConsultantController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách hỗ trợ tư vấn']], function () {
    Route::get('/danh-sach-ho-tro-tu-van', [ConsultantController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Gửi mail phản hồi tư vấn']], function () {
    Route::post('/gui-mail', [ConsultantController::class, 'sendEmail'])->name('sendEmail');
});

Route::group(['middleware' => ['permission:Xóa hỗ trợ tư vấn']], function () {
    Route::delete('/xoa/{consultant}', [ConsultantController::class, 'destroy'])->name('destroy');
});