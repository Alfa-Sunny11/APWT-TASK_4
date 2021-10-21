<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function getReg(){
        return view('employee.addEmployee');
    }
    function reg(Request $req){
        $validateddata = $req->validate([
            'e_id' =>'required|string|min:5',
            'name' =>'required|string',
            'email' => 'required|email',
            'phoneNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'dob' => 'required',
            'address' => 'required|string',
            'password' => 'required|min:5'
        ],
        [
            'e_id.required' => 'Enter Employee ID',
            'name.required' => 'Enter Full Name',
            'email.required' => 'Enter Your Correct Email',
            'phoneNo.required' => 'Enter Phone Number',
            'address.required' => 'Enter Your Address'
        ]);
        $emp = new Employee();
        $emp->e_id = $req->input('e_id');
        $emp->name = $req->input('name');
        $emp->email = $req->input('email');
        $emp->phoneNo = $req->input('phoneNo');
        $emp->dob = $req->input('dob');
        $emp->address = $req->input('address');
        $emp->password = md5($req->input('password'));
        $emp->save();
       // return 'Employee ID: '.$e_id.'<br>'.'Full Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Phone No: '.$phoneNo.'<br>'.'Password: '.$pass;
    }
}
