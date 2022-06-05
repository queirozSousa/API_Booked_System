<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\DepositController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Routes of Countries
Route::post('/pais', [PaisController::class, 'store']);
Route::get('/pais', [PaisController::class, 'index']);

//Routes of Perfil
Route::post('/perfil/{user}', [PerfilController::class, 'store']);
Route::get('/perfil/{id}', [PerfilController::class, 'show']);
Route::get('/perfil', [PerfilController::class, 'index']);

//Routes of Attendences
Route::post('/atendimento/{user}', [AttendenceController::class, 'store']);
Route::get('/atendimento', [AttendenceController::class, 'index']);

//Routes of Deposits
Route::post('/deposito/{user}', [DepositController::class, 'store']);
Route::get('/deposito', [DepositController::class, 'index']);

//Routes of Deposits
Route::post('/balcao', [CounterController::class, 'store']);
Route::get('/balcao', [CounterController::class, 'index']);


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


