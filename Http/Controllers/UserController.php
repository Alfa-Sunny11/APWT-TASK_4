<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    function userReg(){
        return view('user.reg');
    }
    // function userSubmit(Request $req){
    //     $validateddata = $req->validate([

    //         'name' =>'required|string',
    //         'email' => 'required|email',
    //         'phoneNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
    //         'dob' => 'required',
    //         'address' => 'required|string',
    //         'password' => 'required|min:5'
    //     ],
    //     [


    //         'email.required' => 'Enter Your Correct Email',
    //         'phoneNo.required' => 'Enter Phone Number',
    //         'address.required' => 'Enter Your Address'
    //     ]);
    //     $user = new User();
    //     $user->name = $req->input('name');
    //     $user->email = $req->input('email');
    //     $user->phoneNo = $req->input('phoneNo');
    //     $user->dob = $req->input('dob');
    //     $user->address = $req->input('address');
    //     $user->password = md5($req->input('password'));
    //     $user->save();
    //     return 'Full Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Phone No: '.$phoneNo.'<br>'.'Password: '.$pass;
    //   // return view('login');
    // }
    function getUser(Request $req){
        $validateddata = $req->validate([
            'name' =>'required|string|unique:customers',
            'email' => 'required|email|unique:customers',
            'phoneNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'dob' => 'required',
            'address' => 'required|string',
            'password' => 'required|min:5'
        ],
        );
        $cus = new Customer();
        $cus->name = $req->input('name');
        $cus->email = $req->input('email');
        $cus->phoneNo = $req->input('phoneNo');
        $cus->dob = $req->input('dob');
        $cus->address = $req->input('address');
        $cus->password = md5($req->input('password'));
        $cus->save();
      //  return 'Full Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Phone No: '.$phoneNo.'<br>'.'dob:'.$dob.'<br>'.'Address:'.$address.'<br>'.'Password: '.$password;
      // return view('login');
       // return 'Full Name: '.$name.'<br>'.'Email: '.$code.'<br>'.'Query: '.$description;
     
      return redirect('/user/registration')
      ->with('msg','Registration Successfully');
    }
    public function myOrders(){
        $customer_id = session()->get('user');
        $orders = Order::where('customer_id',$customer_id)->get();
        return view('user.order')->with('orders',$orders);
    }
    

}
