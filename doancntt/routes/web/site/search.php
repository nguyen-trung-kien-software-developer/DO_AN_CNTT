<?php

use App\Http\Controllers\Site\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/tim-kiem.html', [SubCategoryController::class, 'searchProduct'])->name('searchProduct');