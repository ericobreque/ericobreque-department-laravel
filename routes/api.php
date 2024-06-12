<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController; // Controller Department

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

/**
 * Definición de rutas de la api
 * index = muestra todo
 * store = guarda un registro 
 * show  = muestra un registro
 * update = actualiza un registro
 * destroy = elimina un registro
 */

Route::get('/departments',[DepartmentController::class,'index']);
Route::post('/departments',[DepartmentController::class,'store']);
Route::get('/departments/{department}',[DepartmentController::class,'show']);
Route::get('/subdepartments/{department}',[DepartmentController::class,'showSubDepartments']);
Route::put('/departments/{department}',[DepartmentController::class,'update']);
Route::delete('/departments/{department}',[DepartmentController::class,'destroy']);