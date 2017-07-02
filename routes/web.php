<?php

//Route::get('/', 'PostsController@index')->name('home');

Route::get('/', function () {
    return view('activities.index');
});

Route::get('/places', function () {
    return view('activities.places');
});

Route::get('/create_activity', function () {
    return view('activities.create_activity');
});

Route::get('/create_group', function () {
    return view('groups.create_group');
});

Route::get('/joined_activities', function () {
    return view('activities.joined_activities');
});

Route::get('/my_activities', function () {
    return view('activities.my_activities');
});

Route::get('/register', function () {
    return view('registration.create');
});

Route::get('/login', function () {
    return view('sessions.create');
});
