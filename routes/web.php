<?php

use App\Http\Controllers\CoordonneeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\TitreController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');


