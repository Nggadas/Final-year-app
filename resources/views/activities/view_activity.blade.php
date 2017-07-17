@extends('layouts.master')

@section('content')
    <a href="/" class="left-primary-nav nav-col">Activities near you</a>
    <a href="/places" class="right-primary-nav nav-col">Places to visit</a>

    <!-- View Activity -->
    <div class="display-div">
        <strong class="display-items">{{ ucfirst($activity->name) }}</strong><br><br>
        <strong class="display-items">Venue: &nbsp;</strong><span>{{ $activity->venue }}</span><br><br>
        <strong class="display-items">City: &nbsp;</strong><span>{{ $activity->city }}</span><br><br>
        <strong class="display-items">Date: &nbsp;</strong><span>{{ $activity->date }}</span><br><br>
        <strong class="display-items">Time: &nbsp;</strong><span>{{ $activity->time }}</span><br><br>
        <strong class="display-items">About: &nbsp;</strong><p class="display-p">{{ $activity->about }}</p>

        @if($isMember == true)
            <form action="/activities/leave" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <input type="hidden" name="activity_member_id" value="{{ $activityMemberID }}">
                <button class="danger" onclick="return confirm('Are you sure you want to leave this activity?')">Leave Activity</button>
            </form>
        @elseif($isMember == false)
            <form action="/activities/join" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $activity->id }}">
                <button>Join Activity</button>
            </form>
        @endif
    </div>

    <div class="display-div">
        <h4>Members</h4>
        @foreach($members as $member)
            @if($member->activity_id == $activity->id)
                <div class="members">
                    <img class="members-img" src="../../images/avartar.png" alt="">
                    {{ $member->firstname }} {{ $member->lastname }}
                </div>
            @endif
        @endforeach
    </div>
@endsection