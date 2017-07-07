@extends('layouts.master')

@section('content')
    <a href="/activities/created" class="right-primary-nav nav-col">Activities You created</a>
    <a href="/activities/joined" class="left-primary-nav nav-col">Activities You Joined</a>
    <h4>Activities you created</h4>

    @foreach($activities as $activity)
        @if($activity->user_id == auth()->id() && $activity->completed != "true")
            <div class="content-div ">
                <div class="content-img"><img src="../../images/hiking.jpg" alt=""></div>

                <div class="content-details">
                    <a class="content-title" href="#">{{ $activity->name }}</a>
                    <p>{{ $activity->about }}</p>
                    <div class="quick-info">
                        <span>Date: </span>{{ $activity->date }} |
                        <span>Location: </span> {{ $activity->city }} |
                        <span>Members: </span>12
                    </div>
                </div>
            </div>
        @endif
    @endforeach

@endsection