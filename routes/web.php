<?php

use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('certification', [CertificationController::class, 'index'])->name('certification');

Route::get('help', [HelpController::class, 'index'])->name('help');

Route::get('search', SearchController::class);
