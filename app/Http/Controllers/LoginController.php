<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function loginindex(){
        return view('login');
    }

    public function loginproses(Request $request){
       $login= $request->only('email','password');


        if (auth::attempt($login)) {
            return redirect('/');
        }
        else {
            return redirect()->back()->with('failed','salah rek');
        }
    }

    public function logout(){
        auth::logout();
        return redirect('/login');
    }
}
