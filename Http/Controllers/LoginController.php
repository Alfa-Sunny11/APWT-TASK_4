<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }
    public function loginSubmit(Request $req){
        $validateddata = $req->validate([
            'e_id' =>'required|string|min:5',
            'password' => 'required|min:5'
        ]
       );
        $c = Employee::where('e_id',$req->e_id)
                  ->where('password',md5($req->password))
                  ->first();
        if($c){
            session()->put('employee',$c->e_id);
            return redirect()->route('home');
          //  return 'Login Successfully';
        }

        return redirect()->route('login');

    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
