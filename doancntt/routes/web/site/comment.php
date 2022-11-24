<?php

use App\Http\Controllers\Site\CommentController;
use Illuminate\Support\Facades\Route;

Route::post('/tao-moi', [CommentController::class, 'store'])->name('store');