<?php // app/Http/Controllers/WelcomeController.php
 
namespace App\Http\Controllers;
 
 
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}