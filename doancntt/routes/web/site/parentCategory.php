<?php

use App\Http\Controllers\Site\ParentCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ParentCategoryController::class, 'index'])->name('index');