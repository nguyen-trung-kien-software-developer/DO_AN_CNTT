<?php

use App\Http\Controllers\Site\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/huong-dan-mua-hang.html', [PageController::class, 'buyingTutorial'])->name('buyingTutorial');
Route::get('/phuong-thuc-dat-hang.html', [PageController::class, 'orderMethod'])->name('orderMethod');
Route::get('/chinh-sach-ban-hang.html', [PageController::class, 'salePolicy'])->name('salePolicy');
Route::get('/chinh-sach-doi-tra-hang.html', [PageController::class, 'returnPolicy'])->name('returnPolicy');
Route::get('/phuong-thuc-van-chuyen.html', [PageController::class, 'transportMethod'])->name('transportMethod');
Route::get('/sam-nui-han-quoc.html', [PageController::class, 'samNuiHanQuoc'])->name('samNuiHanQuoc');
