<?php

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
Route::get('/','IndexController@index');//主页
Route::get('/article/{id}','IndexController@article');//文章


//Route::get('/article', function () {
//    return view('article.index');
//});

