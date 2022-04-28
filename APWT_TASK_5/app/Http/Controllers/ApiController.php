<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class ApiController extends Controller

{
    public function APIList(){
        $users = Users::where('type', 'user')->get();
        return $users;
    }
    public function APIReg(Request $request){
        $user = new Users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->user_id = $request->id;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->type = "user";
        if($user->save()) return "Saved";
    }

}
