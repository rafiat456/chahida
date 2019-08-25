<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registrationForm(){
    	 return view('register');
    }

    public function store(Request $request){
    	dd($request->all());
    }
}
