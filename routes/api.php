<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PerfilController;

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

Route::post('/pais', [PaisController::class, 'store']);
Route::get('/pais', [PaisController::class, 'index']);

Route::post('/perfil/{user}', [PerfilController::class, 'store']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


