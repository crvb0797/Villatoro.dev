<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('contactame', [ContactController::class, 'store'])->name('contact_me');
