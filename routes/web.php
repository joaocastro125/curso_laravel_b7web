<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[SiteController::class,'welcome'] );

Route::get('/site',[SiteController::class,'index']);
Route::get('/componentes',[SiteController::class,'include']);
Route::get('/site/exercicio1',[SiteController::class,'index2']);
Route::get('/site/exercicio2',[SiteController::class,'index3']);
Route::get('/sair',[SiteController::class,'exit']);
Route::get('/user/{id}',[SiteController::class,'users']);
Route::get('/layout',[SiteController::class,'layout']);
