<?php

use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\AutenticarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::put('usuarios/{usuario}',[UsuarioController::class,'update']);
Route::post('registro',[AutenticarController::class,'registro']);
Route::post('acceso',[AutenticarController::class,'acceso']);
Route::group(['middleware'=>['auth:sanctum']], function(){
    
    Route::apiResource('usuarios', UsuarioController::class);
    Route::post('cerrarsesion',[AutenticarController::class,'cerrarSesion']);

});