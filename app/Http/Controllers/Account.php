<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
class Account extends Controller
{
    public function LoginForm(){
        return view('Login');
    }
    public function Authenticaion(Request $request){
        $requests = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
        ]);

        if (Auth::attempt($request->validate(['firstname', 'lastname']))){
            return view('Home');
        }
        return back()->with("error","User name and password is incorrect");
    }
    public function Forget()
    {
        return View('forgot-password');
    }
    public function Reset(Request $request){
        $data = $request->validate([
            'firstname'=>'required',
        ]);
    }
}
