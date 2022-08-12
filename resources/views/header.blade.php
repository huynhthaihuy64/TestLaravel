<header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="{{ asset(route('index')) }}" class="logo">
                    <img src="src/img/mor.jpg.png" alt="Insullusion" class="logo-icon w-50 mt-3">
                </a>
            </div>
            @if (Auth::user())
                <div class="col-1"></div>
            @else
                <div class="col-2"></div>
            @endif
            <nav class="navbar justify-content-end">
                <ul class="navbar__links">
                    @if (Auth::user())
                        <li class="navbar__link"><a href="#">Hi! {{ Auth::user()->name }}</a>
                        </li>
                        <li class="navbar__link"><a href="{{ asset(route('logout')) }}">Logout</a></li>
                        <li class="navbar__link"><a href="{{ asset(route('confirm.create')) }}">Confirm Schedule</a>
                        </li>
                    @else
                        <li class="navbar__link"><a href="{{ asset(route('login')) }}">Login</a></li>
                        <li class="navbar__link"><a href="{{ asset(route('register')) }}">Register</a></li>
                        <li class="navbar__link"><a href="{{ asset(route('cv.create')) }}">Submit CV</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
