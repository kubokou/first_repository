<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;      //追加
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
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class,'delete']);