<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::view('/mentions-legales', 'mentions-legales')->name('mentions-legales');
Route::view('/confidentialite', 'confidentialite')->name('confidentialite');
