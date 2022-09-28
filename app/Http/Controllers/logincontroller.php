<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    function index(){
        return view('admin.login');
    }
    function loginStore(Request $request){

        if(auth()->guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('Dashboard');
        }
        else {
            return redirect()->route('admin.login');
        }
    }

    function logout(){

        Auth::logout();
        return redirect()->route('admin.login');
    }

}
