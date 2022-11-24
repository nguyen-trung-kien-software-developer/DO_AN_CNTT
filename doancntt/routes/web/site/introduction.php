<?php

use App\Http\Controllers\Site\IntroductionController;
use Illuminate\Support\Facades\Route;

Route::get('/{introductionSlug}.html', [IntroductionController::class, 'show'])->name('show');