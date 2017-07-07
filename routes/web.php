<?php

Route::get('/', 'ActivitiesController@index')->name('home');
Route::get('/home', 'ActivitiesController@index')->name('home');

Route::get('/activities/create', 'ActivitiesController@create');
Route::post('/activities', 'ActivitiesController@store');
Route::get('/activities/created', 'ActivitiesController@createdActivities');
Route::get('/activities/joined', 'ActivitiesController@joinedActivities');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@login');
Route::get('/logout', 'SessionsController@destroy');


Route::get('/places', function () {
    return view('activities.places');
});

Route::get('/create_group', function () {
    return view('groups.create_group');
});

Route::get('/joined_activities', function () {
    return view('activities.joined_activities');
});