@extends('layouts.master')

@section('content')
    <a href="/" class="left-primary-nav nav-col">Activities near you</a>
    <a href="/places" class="right-primary-nav nav-col">Places to visit</a>


    <!-- Create Activity -->
    <div class="form-div">
        <form action="#" method="post">

            <fieldset>
                <label for="name">Activity name:</label>
                <input type="text" id="name" name="user_name" placeholder="activity name..." >

                <label for="venue">Venue/Address:</label>
                <input type="text" id="venue" name="venue" placeholder="where is it taking place..." >

                <label for="date">Start date:</label>
                <input type="date" id="date" name="date">

                <label for="time">Time:</label>
                <input type="time" id="time" name="time">

                <label for="capacity">Max capacity:</label>
                <input type="number" id="capacity" name="user_email" min="0" placeholder="maximum number of attendees..." >

                <fieldset>
                    <h4>City:</h4>
                    <label>
                        <select name="location">
                            <optgroup label="England">
                                <option>Select</option>
                                <option value="Leeds">Leeds</option>
                                <option value="Manchester">Manchester</option>
                                <option value="London">London</option>
                                <option value="Sheffield">Sheffield</option>
                            </optgroup>
                        </select>
                    </label>
                </fieldset>

                <fieldset>
                    <h3>Interests tags:</h3>
                    <div class="interests">
                        <div class="interests-row">
                            <h4>Indoor activities</h4>
                            <input type="checkbox" id="indoor_swimming" value="indoor_swimming" name="user_interest">
                            <label for="indoor_swimming" class="light">Indoor swimming</label><br>

                            <input type="checkbox" id="indoor_football" value="indoor_football" name="user_interest">
                            <label for="indoor_football" class="light">Indoor football</label><br>

                            <input type="checkbox" id="cinema" value="cinema" name="user_interest">
                            <label for="cinema" class="light">Cinema</label><br>

                            <input type="checkbox" id="bowling" value="bowling" name="user_interest">
                            <label for="bowling" class="light">Bowling</label><br>

                            <input type="checkbox" id="pool" value="pool" name="user_interest">
                            <label for="pool" class="light">Pool (Cue Sports)</label><br>
                        </div>

                        <div class="interests-row">
                            <h4>Outdoor activities</h4>
                            <input type="checkbox" id="Scuba diving" value="Scuba diving" name="user_interest">
                            <label for="Scuba diving" class="light">Scuba diving</label><br>

                            <input type="checkbox" id="windsurfing" value="windsurfing" name="user_interest">
                            <label for="windsurfing" class="light">Windsurfing</label><br>

                            <input type="checkbox" id="rock_climbing" value="rock_climbing" name="user_interest">
                            <label for="rock_climbing" class="light">Rock climbing</label><br>

                            <input type="checkbox" id="mountain_biking" value="mountain_biking" name="user_interest">
                            <label for="mountain_biking" class="light">Mountain biking</label><br>

                            <input type="checkbox" id="skiing" value="skiing" name="user_interest">
                            <label for="skiing" class="light">Skiing</label><br>
                        </div>
                    </div>
                </fieldset>

                <label for="about">About:</label>
                <textarea id="about" name="about" rows="8" cols="50"  placeholder="talk about activity..." ></textarea>
            </fieldset>

            <button type="submit">Create Activity</button>
        </form>
    </div>
@endsection