@extends('layouts.master')

@section('content')
    <a href="/" class="left-primary-nav nav-col">Activities near you</a>
    <a href="/places" class="right-primary-nav nav-col">Places to visit</a>

    <!-- Activities near you -->
    @foreach($activities as $activity)
        @include('activities.activity')
    @endforeach
@endsection