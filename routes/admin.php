<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\CKEditorController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('posts', PostsController::class)->names('admin.posts')->except('show', 'destroy');
Route::resource('categories', CategorieController::class)->names('admin.categories');
Route::get('tags', [TagController::class, 'index'])->name('admin.tags.index');
Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');
