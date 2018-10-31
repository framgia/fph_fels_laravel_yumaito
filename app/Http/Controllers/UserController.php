<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    // REGISTER
    public function store(request $request)
    {
 // register.blade.phpで定義した input type "name"を出力
      $name=$request->input ('name');
      $email=$request->input ('email');
      $avatar=$request->input ('avatar')->default('default.jpg');
      $password=$request->input ('password');
      $data = array('name'=>$name, "email"=>$email, "avatar"=>$avatar, "password"=>$password);
      DB::table('users')->insert($data);

      echo "Succesful";
    }




// LOGIN
    public function logs(request $request)
    {    
// login.blade.phpにあるinput()の値を持ってくる
        $name=$request->input('name');
        $password=$request->input('password');
        $data= DB::select('select id from user where name=? and password =?' ,[$name,$password]);
                     
        if ($data) {
            return view('login');
            echo "Succesful login page";
        } else {
            echo "try again";
        }
    }      
}
