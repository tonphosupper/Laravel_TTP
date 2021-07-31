<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', [
    'as' => 'trang-chu',
    'uses' => 'NewsController@index'
]);
Route::get('/home', [
    'as' => 'trang-chu',
    'uses' => 'HomeController@index'
]);
Route::get('home/new', 'HomeController@view');

Route::get('/news', 'NewsController@view');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'news'], function () {
        Route::get('add', 'NewsController@view_add');
        Route::post('add', 'NewsController@add');

        Route::get('list', 'NewsController@view_list');

        Route::get('update/{id}', 'NewsController@view_update');
        Route::post('update/{id}', 'NewsController@update');

        Route::get('delete/{id}', 'NewsController@delete');
    });

    Route::group(['prefix' => 'kind'], function () {
        Route::get('add', 'KindController@view_add');
        Route::post('add', 'KindController@add');

        Route::get('list', 'KindController@view_list');

        Route::get('update/{id}', 'KindController@view_update');
        Route::post('update/{id}', 'KindController@update');

        Route::get('delete/{id}', 'KindController@delete');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('add', 'CommentController@view_add');
        Route::get('list', 'CommentController@view_list');
        Route::get('update', 'CommeController@view_update');

        Route::get('delete/{id}/{id_bantin}', 'CommentController@delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('add', 'UserController@view_add');
        Route::post('add', 'UserController@add');

        Route::get('list', 'UserController@view_list');

        Route::get('update/{id}', 'UserController@view_update');
        Route::post('update/{id}', 'UserController@update');

        Route::get('delete/{id}', 'UserController@delete');
    });
});

Route::get('admin/dangnhap', 'UserController@view_login');
Route::post('admin/dangnhap', 'UserController@check');

Route::get('register', 'UserController@view_register');
Route::post('register', 'UserController@register');

Route::get('logout','UserController@logout');