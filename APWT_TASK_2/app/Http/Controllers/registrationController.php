<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function registration(){
        return view('login.registration');
    }

    public function registrationSubmit(Request $request){
        $validate = $request->validate([
               'name' => 'required',
               'dob' => 'required',
               'phone' => 'required',
               'email' => 'email'
        ],
        [
            'name.required'=>'Enter Your Name',
            'dob.required'=>'Enter Your Date of Birth',
            'phone.required'=>'Enter Your Phone Number'
        ]
    );

           return view('home');
        }
        public function logOut(){
            return view('login.login');
         }

}
