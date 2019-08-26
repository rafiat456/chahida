<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registrationForm(){
    	 return view('register');
    }

    public function store(Request $request){

    	    $this->validate($request, [
               'u_name'=>'required',
               'u_email'=>'required',
               'u_city'=>'required',
               'u_address' => 'required',
                'u_mobile' => 'required'
            ]);
           $user = new User();

           $user->u_name = $request->get('u_name');
           $user->u_email = $request->get('u_email');
           $user->u_city = $request->get('u_city');
           $user->u_address = $request->get('u_address');
           $user->u_mobile = $request->get('u_mobile');
           $user->u_postalcode = $request->get('u_postalcode');
           $user->save();

    }
}
