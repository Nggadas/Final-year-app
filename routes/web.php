<?php

Route::get('/', 'ActivitiesController@index')->name('home');

Route::get('/activities/create', 'ActivitiesController@create');

Route::post('/activities', 'ActivitiesController@store');

Route::get('/places', function () {
    return view('activities.places');
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
