<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityMember;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $members = ActivityMember::all();

        $activities = Activity::latest()->get();

        return view('activities.index', compact('activities', 'members'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function createdActivities()
    {
        $activities = Activity::all();

        return view('activities.my_activities', compact( 'activities'));
    }

    public function viewActivity(Activity $activity)
    {
        $members = ActivityMember::all();

        $isMember = false;
        foreach ($members as $member){
            if ($member->activity_id == $activity->id && $member->user_id == auth()->id()){
                $isMember = true;
                $activityMemberID = $member->id;
            }
        }

        return view('activities.view_activity', compact('activity', 'members', 'activityMemberID', 'isMember'));
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

        return redirect('/activities/created');
    }
}
