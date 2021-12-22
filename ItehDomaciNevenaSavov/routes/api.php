<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
   
});

Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/prodavnicas', [App\Http\Controllers\ProdavnicaController::class, 'index']);

Route::get('/proizvodjaci', [App\Http\Controllers\ProizvodjacController::class, 'index']);
//vidi ovo
Route::get('/{userId}/prodavnica', [App\Http\Controllers\ProdavnicaUserController::class, 'index'])->where('userId', '[0-9]+');
Route::get('/userprodavnica', [App\Http\Controllers\ProdavnicaUserController::class, 'getAllInfo']);
Route::get('/prodavnica/{prodavnicaId}', [App\Http\Controllers\ProdavnicaController::class, 'getProdavnica'])->where('prodavnicaId', '[0-9]+');
Route::get('/proizvodjac/{proizvodjacId}', [App\Http\Controllers\ProizvodjacController::class, 'getProizvodjac'])->where('proizvodjacId', '[0-9]+');

Route::post('/proizvodjac/insert', [App\Http\Controllers\ProizvodjacController::class, 'insert']);
Route::post('/prodavnica/insert', [App\Http\Controllers\ProdavnicaController::class, 'insert']);
