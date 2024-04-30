<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'welcome')->middleware('auth');

Route::view('/login', [AuthController::class, 'login'])->name('login');
Route::view('/registro', [AuthController::class, 'registro'])->name('registro');
Route::get('/privada', [AuthController::class, 'index'])->middleware('auth')->name('privada');


Route::post('/validar-registro', [AuthController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [AuthController::class,'login'])->name('inicia-sesion');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');




// Angel Scarpetta
// Creacion de las rutas donde se dirige
