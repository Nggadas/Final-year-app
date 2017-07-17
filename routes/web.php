<?php

Route::get('/', 'ActivitiesController@index')->name('home');
Route::get('/home', 'ActivitiesController@index');

Route::get('/activities/create', 'ActivitiesController@create');
Route::post('/activities', 'ActivitiesController@store');
Route::get('/activities/created', 'ActivitiesController@createdActivities');
Route::get('/activities/joined', 'ActivitiesController@joinedActivities');
Route::post('/activities/join', 'ActivityMembersController@create');
Route::get('/activities/{activity}', 'ActivitiesController@viewActivity');
Route::delete('/activities/leave', 'ActivityMembersController@destroy');

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