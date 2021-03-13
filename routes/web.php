<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;


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

Route::get('/', function(){
    return view('welcome');
});

Route::post( 'articles', [ArticleController::class, 'store'] );
Route::get( 'articles/create', [ArticleController::class, 'create'] )->name('article.create');
Route::get( 'articles', [ArticleController::class, 'index'] );
Route::get( 'articles/{article}', [ArticleController::class, 'show'] );
Route::get( 'articles/{article}/edit', [ArticleController::class, 'edit'] )->name('article.edit');
Route::put( 'articles/{article}', [ArticleController::class, 'update'] );
Route::get( 'articles/{article}/delete', [ArticleController::class, 'destroy'] )->name('article.destory');
