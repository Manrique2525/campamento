<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CasaController;
use App\Http\Controllers\Api\CampistaController;
use App\Http\Controllers\Api\EventoController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Rutas Protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    */

    Route::get('/me', [AuthController::class, 'me']);

    Route::post('/logout', [AuthController::class, 'logout']);

    /*
    |--------------------------------------------------------------------------
    | Casas
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'casas',
        CasaController::class
    );

    /*
    |--------------------------------------------------------------------------
    | Campistas
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'campistas',
        CampistaController::class
    );

    /*
    |--------------------------------------------------------------------------
    | Eventos
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'eventos',
        EventoController::class
    );

});