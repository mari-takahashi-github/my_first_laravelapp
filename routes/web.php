<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ShowArticleController;
use App\Http\Controllers\PostArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TopController::class, 'show']);

Route::get('/', [ShowArticleController::class, 'index']);
Route::get('/article_post',[PostArticleController::class, 'show']);
Route::post('/article_post_success',[PostArticleController::class, 'create']);