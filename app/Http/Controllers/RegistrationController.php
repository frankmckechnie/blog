<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Mail\Welcome;


class RegistrationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(){
    	return view('registration.create');
    }

    public function store(){

    	//validate the form 

    	$this->validate(request(), [
    		'name' => 'required', 
   			'email' => 'required:email', 
    		'password' => 'required|confirmed'
    	]);

    	// create user

    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'), 
            'password' => bcrypt(request('password'))
            ]
        );
    	// sign in 
    	Auth::login($user);
    	// redirect them

        \Mail::to($user)->send(new Welcome($user));

    	return redirect()->home();
    }
}
