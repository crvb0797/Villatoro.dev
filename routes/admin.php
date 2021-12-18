<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CKEditorController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::get('tags', [TagController::class, 'index'])->middleware('can:admin.tags.index')->name('admin.tags.index');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('posts', PostsController::class)->names('admin.posts')->except('show', 'destroy');

Route::resource('categories', CategorieController::class)->names('admin.categories');


Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');
