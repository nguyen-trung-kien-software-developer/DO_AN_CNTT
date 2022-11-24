<?php

use App\Http\Controllers\Site\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/go-to-page', [AjaxController::class, 'goToPage'])->name('goToPage');

Route::post('/address/districts', [AjaxController::class, 'getDistricts'])->name('getDistricts');

Route::post('/address/wards', [AjaxController::class, 'getWards'])->name('getWards');

Route::post('/transport', [AjaxController::class, 'getTransport'])->name('getTransport');

Route::post('/check-discount-code', [AjaxController::class, 'checkDiscountCode'])->name('checkDiscountCode');

Route::get('/notExistingEmail', [AjaxController::class, 'notExistingEmail'])->name('notExistingEmail');

Route::get('/checkExistEmailInLoginForm', [AjaxController::class, 'checkExistEmailInLoginForm'])->name('checkExistEmailInLoginForm');

Route::get('/checkExistCurrentPassword', [AjaxController::class, 'checkExistCurrentPassword'])->name('checkExistCurrentPassword');

Route::get('/ajaxSearchProducts', [AjaxController::class, 'ajaxSearchProducts'])->name('ajaxSearchProducts');

Route::get('/notExistingMobile', [AjaxController::class, 'notExistingMobile'])->name('notExistingMobile');

Route::get('/checkExistMobileInLoginForm', [AjaxController::class, 'checkExistMobileInLoginForm'])->name('checkExistMobileInLoginForm');