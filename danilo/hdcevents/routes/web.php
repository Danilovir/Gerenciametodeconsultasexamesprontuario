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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConsultaController;



Route::get('/', [ConsultaController::class, 'index'] );
Route::get('/events/create', [ConsultaController::class, 'create'])->middleware('auth');
Route::get('/events/prontuario', [ConsultaController::class, 'prontuario'])->middleware('auth');
Route::get('/events/receita', [ConsultaController::class, 'receita'])->middleware('auth');
Route::get('/events/exame', [ConsultaController::class, 'exame'])->middleware('auth');
Route::get('/events/usuarios', [ConsultaController::class, 'usuarios'])->middleware('auth');
Route::get('/events/cade', [ConsultaController::class, 'cade'])->middleware('auth');
Route::get('/events/{id}', [ConsultaController::class, 'show']);
Route::get('/events', [ConsultaController::class, 'store']);
Route::delete('/events/{id}', [ConsultaController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [ConsultaController::class, 'edit'])->middleware('auth');
Route::get('/events/update/{id}', [ConsultaController::class, 'update'])->middleware('auth');


Route::get('/contac', function () {
    return view('contac');
});


Route::get('/dashboard', [ConsultaController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [ConsultaController::class, 'joinEvent'])->middleware('auth');




