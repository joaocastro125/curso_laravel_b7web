<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts/create',[postController::class,'create']);
Route::get('/posts/read',[postController::class,'read']);
Route::get('/posts/read_all',[postController::class,'all']);
Route::get('/posts/update',[postController::class,'update']);
Route::get('/posts/delete',[postController::class,'exit']);