<?php

use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\QueryMakerController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/query', [QueryMakerController::class, 'queryMaker'])->name('queryMaker');
Route::resource('/users', UserController::class)->names('users');
Route::resource('/equipes', EquipeController::class)->names('equipes');
Route::resource('/campeonatos', CampeonatoController::class)->names('campeonatos');

