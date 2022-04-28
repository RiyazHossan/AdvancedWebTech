<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
    public function index(){
        return view('PagesUser.homeUser');
    }

    public function team(){
        return view('PagesUser.ourTeam');
    }

    public function profile(Request $request){
        $user_id = session()->get('user');
        $user = Users::where('id', $user_id)->first();
        return view('PagesUser.profileUser')->with('user', $user);
    }
    public function profileEdit(Request $request){
        $user = Users::where('id', $request->id)->where('type', 'user')->first();

        $user->name = $request->name;
        $user->password = $request->password;
        $user->user_id = $request->user_id;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profileUser');
    }
    public function logout(){
        session()->forget('user');
        return view('Pages.login');
    }
}
