<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function showForm(){
        return view('form');
    }
    public function registration(request $request){
        $request->validate([
                'name'=> 'required',
                'email' => 'required | email',
                'password' => 'required | confirmed',
                'password_confirmation' => 'required',   // same:password
                'country' => 'required',
                'address' => 'required'
        ]);
        
        $customers = new customer();

        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->password = md5($request['password']);
        $customers->country = $request['country'];
        $customers->state = $request['state'];
        $customers->address = $request['address'];
        $customers->gender = $request['gender'];
        $customers->dob = $request['dob'];
        $customers->save();
        
        return redirect('/customers/view'); 
//        echo "<pre>";
  //           print_r($request->all());
    }
    public function showCustomers(){
        $all_customers = Customer::all();
        // echo "<pre>";
        // print_r($all_customers->toArray());
        $data = compact('all_customers');
     return view('customers')->with($data);   
    }
}

