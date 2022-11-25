<?php

use App\Http\Controllers\Admin\PackageController;
use Illuminate\Support\Facades\Route;

Route::post('/addProductToPackage', [PackageController::class, 'add'])->name('add');

Route::post('/display', [PackageController::class, 'display'])->name('display');

Route::put('/update', [PackageController::class, 'update'])->name('update');

Route::delete('/delete', [PackageController::class, 'destroy'])->name('destroy');