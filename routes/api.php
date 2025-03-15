<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbMotoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/',function(){return response()->json(['sucesso'=>true]);});

Route::get('/moto',[DbMotoController::class,'index']);

Route::post('/moto',[DbMotoController::class,'store']);