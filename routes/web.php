<?php

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

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('/test1', [\App\Http\Controllers\HomePageController::class, 'test1'])->name('test1');
Route::get('/test2', [\App\Http\Controllers\HomePageController::class, 'test2'])->name('test2');

Route::post('/import_genres', [\App\Http\Controllers\HomePageController::class, 'import_genres'])->name('import_genres');
Route::post('/import_keywords', [\App\Http\Controllers\HomePageController::class, 'import_keywords'])->name('import_keywords');
Route::post('/import_actors', [\App\Http\Controllers\HomePageController::class, 'import_actors'])->name('import_actors');
Route::post('/import_movies', [\App\Http\Controllers\HomePageController::class, 'import_movies'])->name('import_movies');
