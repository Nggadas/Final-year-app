<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Production Project</title>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" >
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>

<body>
<header class="main-header">
    <div class="logged-out-nav container">
        <span class="login-reg-logo"><img src="../../images/placeholder.png" alt=""></span>
    </div>
</header>

<div class="login-register-wrapper">
    <div class="login-register-container">
        <h2>Register</h2>

        @include ('layouts.errors')

        <form action="" method="post">
            {{ csrf_field() }}

            <fieldset>
                <label for="first_name">First name:</label>
                <input type="text" id="first_name" name="first_name" placeholder="first name.." >

                <label for="last_name">Last name:</label>
                <input type="text" id="last_name" name="last_name" placeholder="last name.." >

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="email.." >

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password..">

                <label for="password_confirmation">Confirm password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="confirm password..">
            </fieldset>

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
                <h3>Interests:</h3>
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
            <button type="submit">Register</button>
        </form>
    </div>
    <span style="margin-top: 20px">Already a member? <a href="/login">Log in</a></span>
</div>
</body>
</html>