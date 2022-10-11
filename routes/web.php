<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use WebWhales\LaravelMultilingual\Middleware\DetectRequestLocale;

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

Route::prefix('{locale}')
     ->middleware(DetectRequestLocale::class)
     ->group(callback: function () {
         Route::get('posts', [PostController::class, 'index']);
         // Route::get('posts/{post}', [PostController::class, 'view']);
         Route::get('posts/{id}', [PostController::class, 'view']);
     });
