<?php

namespace App\Http\Controllers;

use App\Interest;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate the form
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'city' => 'required',
            'password' => 'required|confirmed',
            'interests' => 'required'
        ]);

        //create the user
        $user = User::create(request([
            'firstname',
            'lastname',
            'email',
            'city',
            'password',
        ]));

        //sign them in
        auth()->login($user);

        //create user interest(s)
        $interest = implode(',', request()->get('interests'));

        Interest::create([
            'user_id' => auth()->id(),
            'name' => $interest,
        ]);

        //create flash message
        session()->flash('message', 'Thank you for registering!');

        //redirect to home page
        return redirect()->home();
    }
}
