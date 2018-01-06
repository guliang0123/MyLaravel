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

Route::get('/', function () {
    return view('welcome');
});
//设置方式1
//Route::prefix('admin/article')->namespace('Admin')->group(function () {
//    Route::get('index', 'ArticleController@index');
//    Route::get('create', 'ArticleController@create');
//    Route::post('store', 'ArticleController@store');
//});
//设置方式2
Route::prefix('admin')->namespace('Admin')->group(function () {
    //文章路由设置
    Route::prefix('article')->group(function () {
        Route::get('index', 'ArticleController@index');
        Route::get('create', 'ArticleController@create');
        Route::post('store', 'ArticleController@store');
    });
    //新闻路由设置
    Route::prefix('news')->group(function () {
        Route::get('index', 'NewsController@index');
        Route::get('create', 'NewsController@create');
        Route::post('store', 'NewsController@store');
    });
});
