<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->get();

        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'time' => 'required',
            'capacity' => 'required',
            'about' => 'required',
            'city' => 'required',
            'interest' => 'required',
        ]);

        Activity::create([
            'name' => request('name'),
            'venue' => request('venue'),
            'date' => request('date'),
            'time' => request('time'),
            'capacity' => request('capacity'),
            'about' => request('about'),
            'city' => request('city'),
            'interest' => request('interest'),
            'user_id' => 1,
            'completed' => 'false',
        ]);

        session()->flash('message', 'Your post has now been published');

        return redirect('/');
    }
}
