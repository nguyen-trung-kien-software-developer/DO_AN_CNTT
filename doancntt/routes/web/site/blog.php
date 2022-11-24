<?php

use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/tin-tuc.html', [BlogController::class, 'index'])->name('index');

Route::get('/tin-tuc/{blogSlug}.html', [BlogController::class, 'show'])->name('show');