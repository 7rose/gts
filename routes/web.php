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

// logs
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// 用户
Route::get('/login', 'UserController@login');
Route::post('/check', 'UserController@check');
Route::get('/logout', 'UserController@logout');

// 页面
Route::get('/', 'ProductController@index');
Route::get('/cube', 'ProductController@cube');
Route::get('/cable', 'ProductController@cable');

Route::group(['middleware' => ['gts']], function () {
    // 用户 - 密码
    Route::get('/change_password', 'UserController@changPassword');
    Route::post('/save_password', 'UserController@savePassword');

    // 产品
    Route::get('/create', 'ProductController@create');
    Route::post('/products_store', 'ProductController@store');
    Route::get('/img/{id}', 'ProductController@img');
    Route::get('/delete/{id}', 'ProductController@delete');
});
    Route::post('/img_store', 'ProductController@imgStore');

Route::get('/test', function() {
    return view('img');
    // abort('403');
});



