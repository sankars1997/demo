<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function userlogin(){
        
        return view ('admin login');
    }


    public function register(Request $request){
        
        $request->validate([
            'empid' => 'required|integer|unique:users,empid',
            'username' => 'required|string|max:255',
            'aadharno' => 'required|digits:10|unique:users,aadharno',
            'designation' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5',
        ]);
    
        
        User::create([
            'empid' => $request->empid,
            'username' => $request->username,
            'aadharno' => $request->aadharno,
            'designation' => $request->designation,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('adduser')->with('message','user added successfully');;
    }
}
