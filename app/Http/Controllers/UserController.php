<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\User;


// Use App\Http\Requests;

// Use App\User;
// // データベース"User"に保存するため


class UserController extends Controller
{

	// REGISTER
    public function store(request $request)
    {
 // register.blade.phpで定義した input type "name"を出力
      $name=$request->input ('name');
      $email=$request->input ('email');
      $password=$request->input ('password');
      echo DB::insert('insert into user(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
    }



		// $data = $requeste->only('name', 'email', 'password');
		// $data['password'] = bcrypt($data['password']);
		// // パスワードに ['ハッシュ'] をつけなければいけない
		// $user = User::create($data);
		// // Userデータベースが "パスワード($data)" を保存させる
		// if($user){
		// 	\Auth::login($user);
		// 	return redirect()->route('home');
		// 	// 保存できたとき
		// }

		//     return back()->withInput();
		//     // 保存できなかった時

	
	       // Login
//  function "logs"  はlogin.blade.phpにある
// <form class="" action="{{URL::to('/logs')}}" method="post"> 
    //[/logs]
    public function logs(request $req)
    {    
// login.blade.phpにあるinput()の値を持ってくる
    	$name = $req->input('name');
        $password = $req->input('password');

        $checkLogin = DB::table('users')->where(['name'=>$name, 'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
            echo "Succesful login page";
        }
        else {
            echo "try again";
        }
    }      
}


        // $data = DB::select('select id from user where name=? and password =?' ,[$name,$password]);
 
 //   if(count($data))
 //    	// このコードにシンタックス エラーが発生
//    {
//             echo "Succesful login page";
//      }
//    else {
//             echo "try again";
//         }
//     }      
// }
