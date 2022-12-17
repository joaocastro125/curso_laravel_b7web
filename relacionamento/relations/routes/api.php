<?php

use App\Http\Controllers\addressController;
use App\Http\Controllers\usersController;
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

Route::get('/users',[usersController::class,'index']);
Route::get('/users/{id}',[usersController::class,'findOne']);
//inserindo dados > O onlymétodo retorna todos os pares chave/valor solicitados; no entanto, ele não retornará pares de chave/valor que não estejam presentes na solicitação.
Route::post('/users',[usersController::class,'insert']);
Route::get('/address',[addressController::class,'index']);
Route::get('/address/{id}',[addressController::class,'findOne']);
Route::post('/address',[addressController::class,'insert']);
