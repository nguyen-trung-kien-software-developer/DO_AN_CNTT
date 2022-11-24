<?php

use App\Http\Controllers\Site\ConsultantController;
use Illuminate\Support\Facades\Route;

Route::post('/gui-yeu-cau-tu-van', [ConsultantController::class, 'sendRequestConsultant'])->name('sendRequestConsultant');