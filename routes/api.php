<?php

use App\Http\Controllers\PacientesAPIController;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Paciente Routes
|--------------------------------------------------------------------------
*/
Route:: get('/pacientes', [PacientesAPIController::class, 'index']);
Route:: post('/pacientes', [PacientesAPIController::class, 'store']);
Route:: put('/pacientes/{paciente}', [PacientesAPIController::class, 'update']);
Route:: delete('/pacientes/{paciente}', [PacientesAPIController::class, 'destroy']);
