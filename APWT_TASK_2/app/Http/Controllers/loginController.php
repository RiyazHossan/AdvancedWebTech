<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
       return view('login.login');
    }

    public function loginSubmit(Request $request){
        $validate = $request->validate(
            [
               'userName' => 'required',
               'password' => 'required'
            ],
            [
            'userName.required'=>'Enter Your User Name !',
            'password.required'=>'Enter Your Password !'
            ]
    );

        $userName = $request->input('userName');
        $password = $request->input('password');

        if($userName === "Riyaz" && $password === "123"){
           return view('home');
        }
        else{
           return "User name and Password do not match";
        }

   }

   public function logOut(){
    return view('login.login');
 }
}
