<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function login()
    {
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        //authenticate details
        if (! auth()->attempt(request(['email', 'password'])))
        {
            //return back to login page if unsuccessful
            return back()->withErrors([
                'message' => 'Please review your details and try again.'
            ]);
        }

        session()->flash('message', 'Welcome Back!');

        //redirect to home page
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
