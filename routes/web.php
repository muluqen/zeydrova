<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TelegramController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Contact form submission
Route::post('/contact', [ContactController::class, 'send'])->name('send.message');

// Telegram username validation (AJAX)
Route::post('/validate-telegram', [TelegramController::class, 'validateUsername'])->name('validate.telegram');
