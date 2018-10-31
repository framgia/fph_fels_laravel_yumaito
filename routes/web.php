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
    return view('register');
});
// register.blade.phpで定義したaction="{{ URL::to('/store')}}" method="post">
// URLを"store"にした時 ,
Route::post('store', "UserController@store");
// ”ファイル名＠ファンクション名”
//UserControllerで定義した ファンクション名 "public function store"を＠store
Route::post('/upload','HomeController@upload');

Route::post('/myaction','UsersController@store');
// register.blade.phpの   action="/myaction"  method="post"



