<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class RegistrationController extends Controller
{
    public function registration(){
        return view('Pages.registration');
    }
    public function registrationSubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'id' => 'required',
            'email' => 'email'
        ],
        [
            'name.required'=>'Enter Your Name',
            'password.required'=>'Enter Your Password'
        ]
    );
        $user = new Users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->user_id = $request->id;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->type = "user";
        $user->save();

        return view('PagesUser.homeUser');
    }

}
