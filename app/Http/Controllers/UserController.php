<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use  Illuminate\Support\Facades\DB;
class UserController extends Controller
{
	// REGISTER
    public function store(request $request)
    {
     
 // register.blade.phpで定義した input type "name"を出力
      $userName=$request->input ('username');
      $Email=$request->input ('email');
      $password=$request->input ('password');
      echo DB::insert('insert into user(id,username,email,password) values(?,?,?,?)',[null,$username,$email,$password]);
    }

       // Login
//  function "logs"  はlogin.blade.phpにある
// <form class="" action="{{URL::to('/logs')}}" method="post"> 
    //　　　　　　　　　　[/logs]　 
    public function logs(request $request)
    {    
// login.blade.phpにあるinput()の値を持ってくる
    	$username=$request->input('username');
        $password=$request->input('password');
        $data= DB::select('select id from user where name=? and password =?' ,[$username,$password]);
 
 　　   if(count($data))
    	// $data 一人のアカウント
  　　  {
            echo "Succesful login page";
   　　 }
    　　else {
            echo "try again";
        }
    }      
}
