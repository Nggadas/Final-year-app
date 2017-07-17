<?php

namespace App\Http\Controllers;

use App\Activity;
use App\User;
use App\ActivityMember;
use Illuminate\Http\Request;

class ActivityMembersController extends Controller
{
    public function create()
    {
        $id = auth()->id();
        $user = User::all()->find($id);

        ActivityMember::create([
            'activity_id' => request('id'),
            'user_id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
        ]);

        session()->flash('message', 'You have been added to this activity!');

        return redirect()->back();
    }

    public function destroy()
    {
        $id = request('activity_member_id');

        $activityMember = ActivityMember::find($id);

        $activityMember->delete();

        session()->flash('message', 'You have been removed from this activity!');

        return redirect()->back();
    }
}
