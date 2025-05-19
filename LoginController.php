<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function adminlogin(){
        return view ('login');
    }


    public function dologin(){
        if(auth()->attempt([
      'username'=>request('username'),
      'password'=>request('password')
        ])){
              return redirect()->route('search');
        }
        else{
                 return redirect()->route('login')->with('message','login is invalid');
        }
    }


    public function adminlogout(){
        auth()->logout();
        return view ('login');
    }


    public function search(){
        if(auth()->check()){
            return view('search');
        }
        else{
            return redirect()->route('login');
        }
    }


    public function adduser(){
        
        return view ('adduser');
    }


    public function addsupplier(){
        
        return view ('addsupplier');
    }
}
