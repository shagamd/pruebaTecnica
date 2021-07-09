<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculaController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('pelicula', [PeliculaController::class, 'store'])->name('pelicula.store');
Route::post('calificarpelicula', [PeliculaController::class, 'calificar'])->name('pelicula.calificar');

