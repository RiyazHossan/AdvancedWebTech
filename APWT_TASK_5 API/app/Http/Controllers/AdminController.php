<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function index(){
        return view('PagesAdmin.homeAdmin');
    }

    public function list(){
        $users = Users::where('type', 'user')->get();
        return view('PagesAdmin.list')->with('users', $users);
    }
    public function profile(Request $request){
        $user_id = session()->get('user');
        $user = Users::where('id', $user_id)->first();
        return view('PagesAdmin.profileAdmin')->with('user', $user);
    }
    public function profileEdit(Request $request){
        $user = Users::where('id', $request->id)->first();

        $user->name = $request->name;
        $user->password = $request->password;
        $user->user_id = $request->user_id;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profileAdmin');
    }
    public function logout(){
        session()->forget('user');
        return view('Pages.login');
    }

    public function editUser(Request $request){
        $user = Users::where('id', $request->id)->first();
        return view('PagesAdmin.editUser')->with('user', $user);
    }
    public function editUserSubmit(Request $request){
        $user = Users::where('id', $request->id)->first();

        $user->name = $request->name;
        $user->user_id = $request->user_id;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('listAdmin');
    }

    public function deleteUser(Request $request){
        $user = Users::where('id', $request->id)->first();
        return view('PagesAdmin.deleteUser')->with('user', $user);
    }

    public function deleteUserSubmit(Request $request){
        $user = Users::where('id', $request->id)->first();
        $user->delete();
        return redirect()->route('listAdmin');
    }
    public function addUser(){
        return view('PagesAdmin.addUser');
    }
    public function addUserSubmit(Request $request){
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

        return $this->list();
    }

}
