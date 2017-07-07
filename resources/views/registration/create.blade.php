<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Production Project</title>
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

        <form action="/register" method="post">
            {{ csrf_field() }}

            <fieldset>
                <label for="firstname">First name:</label>
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="first name.." required>

                <label for="lastname">Last name:</label>
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="last name.." required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="email.." required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password.." required>

                <label for="password_confirmation">Confirm password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="retype password.." required>
            </fieldset>

            <fieldset>
                <h4>City:</h4>
                <label>
                    <select name="city">
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
                <h3>Interests:</h3>
                <div class="interests">
                    <div class="interests-row">
                        <h4>Indoor activities</h4>
                        <input type="radio" id="indoor_swimming" value="indoor_swimming" name="interests[]">
                        <label for="indoor_swimming" class="light">Indoor swimming</label><br>

                        <input type="radio" id="indoor_football" value="indoor_football" name="interests[]">
                        <label for="indoor_football" class="light">Indoor football</label><br>

                        <input type="radio" id="cinema" value="cinema" name="interests[]">
                        <label for="cinema" class="light">Cinema</label><br>

                        <input type="radio" id="bowling" value="bowling" name="interests[]">
                        <label for="bowling" class="light">Bowling</label><br>

                        <input type="radio" id="pool" value="pool" name="interests[]">
                        <label for="pool" class="light">Pool (Cue Sports)</label><br>
                    </div>

                    <div class="interests-row">
                        <h4>Outdoor activities</h4>
                        <input type="radio" id="Scuba diving" value="Scuba_diving" name="interests[]">
                        <label for="Scuba diving" class="light">Scuba diving</label><br>

                        <input type="radio" id="windsurfing" value="windsurfing" name="interests[]">
                        <label for="windsurfing" class="light">Windsurfing</label><br>

                        <input type="radio" id="rock_climbing" value="rock_climbing" name="interests[]">
                        <label for="rock_climbing" class="light">Rock climbing</label><br>

                        <input type="radio" id="mountain_biking" value="mountain_biking" name="interests[]">
                        <label for="mountain_biking" class="light">Mountain biking</label><br>

                        <input type="radio" id="skiing" value="skiing" name="interests[]">
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