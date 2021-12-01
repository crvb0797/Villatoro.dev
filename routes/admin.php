<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategorieController::class)->names('admin.categories');
