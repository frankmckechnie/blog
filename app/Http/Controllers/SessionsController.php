<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destory']);
    }

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {

    	if(! Auth::attempt(request(['email', 'password']))){
    		return back()->withErrors([
    			'message' => 'Please Check your credentials'
    		]);
    	}

    	return redirect()->home();
    }

    public function destory()
    {
  		Auth::logout();

  		return redirect()->home();
    }
}

