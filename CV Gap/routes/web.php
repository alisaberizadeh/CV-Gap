<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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
    Route::get('/panel', [AdminController::class, 'index'])->name('admin.panel');
    Route::get('/profile', [AdminController::class, 'show_profile'])->name('admin.profile');
    Route::post('/profile/update/{id}', [AdminController::class, 'profile_update'])->name('admin.profile_update');
});



Route::prefix('user')->middleware('isUser')->group(function () {
    Route::get('/panel', [NormalUserController::class, 'index'])->name('user.panel');
});