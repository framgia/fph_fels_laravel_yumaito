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
    return view('dashbord');
});

Route::get('/about', 'UserController@about');
//　UserControllerファイル内の　ファンクション@aboutに　"return view('about');" 定義
// ブラウザーに "about.blade.php"表示される



