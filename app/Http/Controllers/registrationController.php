<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function Home(){
        return view('form');
    }
    public function register(request $request){
    $request->validate(
        [
            'name'=> 'required',
            'email'=> 'required | email',
            'password'=> 'required'
        ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
