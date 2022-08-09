<header>
    <div class="container-fluid">
        <nav class="navbar justify-content-end">
            <ul class="navbar__links">
                @if (Auth::user())
                    <li class="navbar__link"><a href="#">Chào bạn {{ Auth::user()->name }}</a></li>
                    <li class="navbar__link"><a href="{{ asset(route('logout')) }}">Logout</a></li>
                    <li class="navbar__link"><a href="./confirmSchedule.php">Confirm Schedule</a></li>
                @else
                    <li class="navbar__link"><a href="{{ asset(route('login')) }}">Login</a></li>
                    <li class="navbar__link"><a href="{{ asset(route('register')) }}">Register</a></li>
                    <li class="navbar__link"><a href="{{ asset(route('cv.create')) }}">Submit CV</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>
