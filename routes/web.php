<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::middleware("r")->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::post('/contact_form', [IndexController::class, 'index'])->name('contact_form');
});
