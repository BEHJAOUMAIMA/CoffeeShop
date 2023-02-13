<?php

use App\Http\Controllers\DishesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'welcome']);
Route::get('/homeUser', [DishesController::class, 'index']);
Route::resource('/menu',DishesController::class)->middleware('isAdmin');

Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'updateInformation'])->name('profile.update');
    Route::post('profile/{user}',[ProfileController::class,'updatePassword'])->name('profile.update');
});

Auth::routes();

Route::get('welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
