<?php

use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/lien-he.html', [ContactController::class, 'index'])->name('index');

Route::post('/gui-lien-he.html', [ContactController::class, 'sendContact'])->name('sendContact');
