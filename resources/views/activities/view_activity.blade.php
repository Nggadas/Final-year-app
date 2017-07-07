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
        <form action="/activities/join" method="get">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $activity->id }}">
            <button>Join</button>
        </form>
    </div>

    <hr>

    <div class="display-div">
        <h4>Members</h4>
    </div>
@endsection