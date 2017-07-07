<?php

namespace App\Http\Controllers;

use App\Activity;
use App\User;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except(['index']);
//    }

    public function index()
    {
        $activities = Activity::latest()->get();

        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function createdActivities()
    {
//        $id = auth()->id();
//        $user = User::all()->find($id);

        $activities = Activity::all();

        return view('activities.my_activities', compact( 'activities'));
    }

    public function joinedActivities()
    {
        return view('activities.joined_activities');
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
            'user_id' => auth()->id(),
            'completed' => 'false',
        ]);

        session()->flash('message', 'Your activity was created successfully!');

        return redirect('/');
    }
}
