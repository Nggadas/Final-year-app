<header class="main-header">
    <div class="container nav-container">
        <div class="left-nav">
            <span class="logo"><img src="../../images/placeholder.png" alt=""></span>
            <form class="display-none">
                <input type="search" name="search" placeholder="Search.." autocomplete="off">
                <input type="button" name="search" value="&#128269;" class="search-button" >
            </form>
        </div>

        <nav class="main-nav">
            <a href="/">Home</a>

            <div class="dropdown">
                <a href="#" class="dropbtn">Activities</a>
                <div class="dropdown-content">
                    <a href="/activities/create" style="color: #000;padding: 10px;font-size: 12px;text-align: left">Create activity</a>
                    <a href="/activities/created" style="color: #000;padding: 10px;font-size: 12px;border-top: solid 1px #000;text-align: left;">My activities</a>
                </div>
            </div>


            <div class="dropdown">
                <a href="#" class="dropbtn">Groups</a>
                <div class="dropdown-content">
                    <a href="/create_group" style="color: #000;padding: 10px;font-size: 12px;text-align: left">Create group</a>
                    <a href="#" style="color: #000;padding: 10px;font-size: 12px;border-top: solid 1px #000;text-align: left;">My groups</a>
                </div>
            </div>

                    @if (Auth::check())
                        <div class="account">
                            <img class="nav-pic" src="../../images/avartar.png" alt="">
                            <div class="dropdown">
                                <a href="#" class="dropbtn">{{ Auth::user()->firstname }}<span> &#9660; </span></a>
                                <div class="dropdown-content">
                                    <a href="#" style="color: #000;padding: 10px;font-size: 12px;text-align: left">Edit Profile</a>
                                    <a href="/logout" style="color: #000;padding: 10px;font-size: 12px;border-top: solid 1px #000;text-align: left;">Logout</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/login">Login</a>
                    @endif
        </nav>
    </div>
</header>