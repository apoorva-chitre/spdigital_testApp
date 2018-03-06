<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create() {

    	return view('registrations.create');

    }

    public function store() {

    	//validate the form

    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed',


    	]);

    	//create the user


    	$user = User::create(request(['name', 'email', 'password']));

    	//sign them in after they register

    	auth()->login($user);

    	//redirect to the home page

    	return redirect()->home();

    }


}
