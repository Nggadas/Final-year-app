@extends('layouts.master')

@section('content')
    <a href="/" class="left-primary-nav nav-col">Activities near you</a>
    <a href="/places" class="right-primary-nav nav-col">Places to visit</a>


    <!-- Create Activity -->
    <div class="form-div">
        <form action="/activities" method="post">
            {{ csrf_field() }}

            @include ('layouts.errors')

            <fieldset>
                <label for="name">Activity name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="activity name..." >

                <label for="venue">Venue/Address:</label>
                <input type="text" id="venue" name="venue"  value="{{ old('venue') }}" placeholder="where is it taking place..." >

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="{{ old('date') }} ">

                <label for="time">Time:</label>
                <input type="time" id="time" name="time" value="{{ old('time') }}">

                <label for="capacity">Max capacity:</label>
                <input type="number" id="capacity" name="capacity" value="{{ old('capacity') }}" min="1" placeholder="maximum number of attendees..." >

                <label for="about">About:</label>
                <textarea id="about" name="about" rows="8" cols="50"  placeholder="talk about activity..." ></textarea>
            </fieldset>

            <fieldset>
                <h4>City:</h4>
                <label>
                    <select name="city" id="city">
                        <optgroup label="England">
                            <option value="Leeds">Leeds</option>
                            <option value="Manchester">Manchester</option>
                            <option value="London">London</option>
                            <option value="Sheffield">Sheffield</option>
                        </optgroup>
                    </select>
                </label>
            </fieldset>

            <fieldset>
                <h3>Interest tags:</h3>
                <div class="interests">
                    <div class="interests-row">
                        <h4>Indoor activities</h4>
                        <input type="radio" id="indoor_swimming" value="indoor_swimming" name="interest">
                        <label for="indoor_swimming" class="light">Indoor swimming</label><br>

                        <input type="radio" id="indoor_football" value="indoor_football" name="interest">
                        <label for="indoor_football" class="light">Indoor football</label><br>

                        <input type="radio" id="cinema" value="cinema" name="interest">
                        <label for="cinema" class="light">Cinema</label><br>

                        <input type="radio" id="bowling" value="bowling" name="interest">
                        <label for="bowling" class="light">Bowling</label><br>

                        <input type="radio" id="pool" value="pool" name="interest">
                        <label for="pool" class="light">Pool (Cue Sports)</label><br>
                    </div>

                    <div class="interests-row">
                        <h4>Outdoor activities</h4>
                        <input type="radio" id="Scuba diving" value="Scuba diving" name="interest">
                        <label for="Scuba diving" class="light">Scuba diving</label><br>

                        <input type="radio" id="windsurfing" value="windsurfing" name="interest">
                        <label for="windsurfing" class="light">Windsurfing</label><br>

                        <input type="radio" id="rock_climbing" value="rock_climbing" name="interest">
                        <label for="rock_climbing" class="light">Rock climbing</label><br>

                        <input type="radio" id="mountain_biking" value="mountain_biking" name="interest">
                        <label for="mountain_biking" class="light">Mountain biking</label><br>

                        <input type="radio" id="skiing" value="skiing" name="interest">
                        <label for="skiing" class="light">Skiing</label><br>
                    </div>
                </div>
            </fieldset>

            <button type="submit">Create Activity</button>
        </form>
    </div>
@endsection