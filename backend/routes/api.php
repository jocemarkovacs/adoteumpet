<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AdocaoController;

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

Route::get('/pets', [PetController::class, 'index']);
Route::post('/pets', [PetController::class, 'store']);

Route::post('/adocoes', [AdocaoController::class, 'store']);
Route::get('/adocoes', [AdocaoController::class, 'index']);

// Route::post('/pets', function(){
//     echo 'estou cadastrando um novo Pet';
// });

// Route::put('/pets', function(){
//     echo 'estou atualizando um Pet';
// });

// Route::delete('/pets', function(){
//     echo 'estou apagando um Pet';
// });
