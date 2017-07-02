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
        <h2>Log in</h2>
        <form action="" method="post">
            <fieldset>
                <label for="email">Email:</label>
                <input type="email" id="email" name="user_name" placeholder="email" >

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password">
            </fieldset>
            <button type="submit">Log in</button>
        </form>
    </div>
    <span style="margin-top: 20px">Not a member? <a href="/register">Sign up now</a></span>
</div>
</body>
</html>