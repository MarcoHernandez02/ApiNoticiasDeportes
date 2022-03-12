<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeporteController;
use Database\Seeders\deportesSeeder;

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

// -- Vistas
//Route::get('/' , [DeporteController::class, 'index'])->name('inicio');

// -- Mostrar noticias
Route::get('/index' , [DeporteController::class, 'mostrarNoticias'])->name('inicio');


