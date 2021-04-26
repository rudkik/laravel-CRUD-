<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PagesController2;
use App\Http\Controllers\LaravelController;
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

//Route::get('/first-page', function () {
//    return "<h1 style=\"font-family: Arial;\">This is my first page in Laravel</h1>";
//});



Route::get('/todos', [LaravelController::class, "todos"]) ;
Route::get('/student', [PagesController::class, "student"]) ;
Route::get('/blog', [PagesController2::class, "blogPage"]) ;
Route::get('/blog/{id}', [PagesController2::class, "articlePage"]) ;

Route::post('/article', [ArticlesController::class,"store"]);
Route::post('/article/delete', [ArticlesController::class,"destory"]);
Route::post('/article/update', [ArticlesController::class,"update"]);
Route::get('/article/{id}/update', [PagesController2::class,"artcleUpdatePage"]);
