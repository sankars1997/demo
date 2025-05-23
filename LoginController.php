renamed as admin controller
<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\District;
use App\Models\State;
use App\Models\College;


use Illuminate\Http\Request;

class Admincontroller extends Controller
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
     

    public function adduser(){
        return view('adduser');
    }

    

    public function search(){
        if(auth()->check()){
            return view('search');
        }
        else{
            return redirect()->route('login');
        }
    }


    


    public function addsupplier(){
        
        return view ('addsupplier');
    }

    public function addlaptop(){
        
        return view ('addlaptop');
    }
    public function addcollege(){
        $districts = District::all(); 
        $states = State::all(); 
    return view('addcollege', compact('districts', 'states'));
      }
      
      public function registercollege(Request $request){

        $validated = $request->validate([
            'collegeid'     => 'required|string|max:50|unique:colleges,collegeid',
            'collegename'   => 'required|string|max:100',
            'address'       => 'required|string',
            'state'         => 'required|string|exists:states,id',
            'district'      => 'required|string|exists:districts,id',
            'email'         => 'required|email|unique:colleges,email',
            'mobilenumber'  => 'required|digits:10',
        ]);



        College::create([
            'collegeid' => $request->collegeid,
            'collegename' => $request->collegename,
            'address' => $request->address,
            'state' => $request->state,
            'district' => $request->district,
            'email' => $request->email,
            'mobilenumber' => $request->mobilenumber,
            
        ]);
        return redirect()->route('addcollege')->with('message','college added successfully');;
      }
}
