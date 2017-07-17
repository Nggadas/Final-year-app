<div class="profile">
    @if (Auth::check())
        <img src="../../images/avartar.png" alt="">
        <h4>Hello, {{ Auth::user()->firstname }}</h4>
        <a href="/account/edit/{{ Auth::user()->id }}">Edit Your Profile</a>
    @else
        <a href="/login">Login to continue</a>
    @endif

</div>