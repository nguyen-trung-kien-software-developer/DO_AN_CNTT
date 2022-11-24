<?php

use App\Http\Controllers\Site\BranchController;
use Illuminate\Support\Facades\Route;

Route::get('/he-thong-chi-nhanh-gogogreen.html', [BranchController::class, 'index'])->name('index');