<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $first = $request["Fname"];
        $last = $request["Lname"];
        $data = ['Fname' => $first, 'Lname' => $last];
       // return "$Fname $Lname";
        return view('welcome')->with('first',$first)->with('last',$last);
    }
}
