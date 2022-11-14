<?php

use App\Http\Controllers\Site\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/{subCategorySlug}.html', [SubCategoryController::class, 'index'])->name('index');