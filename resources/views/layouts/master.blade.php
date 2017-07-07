<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Production Project</title>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" >
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>

<body>
<div class="wrapper">
    @include('layouts.nav')

    @if($flash = session('message'))
        <div class="flash-message" role="alert">
            {{ $flash }}
        </div>
    @endif

    <div class="container main-content">

        <div class="tertiary col">
            @include('layouts.left_col')
        </div>

        <div class="primary col">
            @yield('content')
        </div>

        <div class="secondary col">
            @include('layouts.right_col')
            @include('layouts.footer')
        </div>
    </div>
</div>
</body>
</html>