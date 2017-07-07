<div class="profile">
    <img src="../../images/avartar.png" alt="">
    @if (Auth::check())
        <h4>Hello, {{ Auth::user()->firstname }}</h4>
        <a href="/account/edit/{{ Auth::user()->id }}">Edit Your Profile</a>
    @else
        <h4>Hello, John</h4>
        <a href="#">Edit Your Profile</a>
    @endif

</div>