<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategorieController::class)->names('admin.categories');
Route::get('tags', [TagController::class, 'index'])->name('admin.tags.index');
