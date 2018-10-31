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
    return view('login');
});

// Route::get('/', 'ArticlesController@index')->name('home'); 必要か確認！
// ArticlesController存在していない
Route::view('/register', "register");
// Route::view('/login', "login");
Route::post('/store', "UserController@store");
Route::post('/logs', "UserController@logs");


// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




