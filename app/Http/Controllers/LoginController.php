<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

// クラス名
class LoginController extends BaseController
{
    public function login($request $req)
    {
        $username = $req->('username');
        $password = $req->('password');

        $checklogin = DB::table('users')->where(['username'=>$username, 'password'=>$password])->get();
        if(count($checklogin) >0)
        {
            echo "Login SuccessFull";
        }
        else{
            echo "login Faield Wrong Data Passed";
        }
    }
}