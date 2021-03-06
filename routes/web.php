<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;


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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/fresh', function () {
//    $strModuleName = request('module');
//    if( is_string( $strModuleName ) && strlen( $strModuleName ) > 0 ) {
//        if( 'test1' == $strModuleName ) {
//            return view('fresh', [ 'moduleName'=>$strModuleName ]);
//        } else {
//            return view('welcome');
//        }
//
//    }
//
//});

// todo: below code is now added in PostsController::execute
//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my_first_post' => 'This is my first post',
//        'my_second_post' => 'This_is_my_second_post'
//    ];
//    if( isset( $posts[$post] ) ) {
//        return view( 'fresh', [ 'my_post' => $posts[$post] ] );
//    } else {
//        abort( 404, "Sorry, the page not found with post you've sent" );
//    }
//
//});

Route::get('/', function(){
    return view('welcome');
});
Route::get( '/posts/{post}', [PostsController::class, 'execute'] );
Route::post( 'articles', [ArticlesController::class, 'store'] );
Route::get( 'articles/create', [ArticlesController::class, 'create'] );
Route::get( 'articles', [ArticlesController::class, 'index'] );
Route::get( 'articles/{article}/edit', [ArticlesController::class, 'edit'] );
