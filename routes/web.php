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
    // alert()->success('Title', 'Lorem Lorem Lorem');
    return view('welcome');
});

Route::get('/test', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dropdown
Route::get('/dropdown', 'HomeController@dropdown');

// Swwetalert [post]
Route::get('/post', 'PostController@index')->name('post');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/storee', 'PostController@store')->name('post.store');
