<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\NormalUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.panel');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::put('/profile/update/{id}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/users/new', [UsersController::class, 'new'])->name('user.new');
    Route::post('/users/new', [UsersController::class, 'create'])->name('user.create');

    Route::get('/users', [UsersController::class, 'management'])->name('user.management');

    Route::get('/users/{id}/details', [UsersController::class, 'details'])->name('user.details');
    Route::delete('/users/{id}/delete', [UsersController::class, 'delete'])->name('user.delete');

    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}/update', [UsersController::class, 'update'])->name('user.update');


    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::post('/categories/new/', [CategoriesController::class, 'create'])->name('categories.create');
    Route::delete('/categories/{id}/delete', [CategoriesController::class, 'delete'])->name('categories.delete');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/articles/new', [ArticleController::class, 'new'])->name('articles.new');
    Route::post('/articles/new/', [ArticleController::class, 'create'])->name('articles.create');


});



Route::prefix('user')->middleware('isUser')->group(function () {
    Route::get('/panel', [NormalUserController::class, 'index'])->name('user.panel');
});