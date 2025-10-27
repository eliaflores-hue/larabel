<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoriaController;
use  App\Http\Controllers\ProductoController;

Route::apiResource('categorias',CategoriaController::class);
Route::apiResource('productos',ProductoController::class);
//Route::get('/user', function (Request $request) {
  //  return ['message' => 'API funcionando correctamente'];
//});

