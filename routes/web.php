<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\Preorder\VerificationController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('shops', [HomeController::class, 'shops'])
    ->name('shops');

Route::get('contact', ContactPageController::class)
    ->name('contact');

Route::post('contact', [ContactPageController::class, 'store'])
    ->name('contact.store');

Route::get('/preorder/verify/{preorder}', [VerificationController::class, 'store'])
    ->middleware('signed')
    ->name('preorder.verify');


