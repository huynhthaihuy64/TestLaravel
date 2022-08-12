<header>
    <div class="container">
        @if (Auth::user())
        @else
            <div class="row">
                <div class="col-4">
                    <a href="{{ asset(route('admins.index')) }}" class="logo">
                        <img src="src/img/mor.jpg.png" alt="Insullusion" class="logo-icon w-50 mt-3">
                    </a>
                </div>
                <div class="col-2"></div>
        @endif
        <nav class="navbar justify-content-end">
            <ul class="navbar__links">
                @if (Auth::user())
                    <li class="navbar__link"><a href="#">Chào bạn {{ Auth::user()->name }}</a></li>
                    <li class="navbar__link"><a href="{{ asset(route('logout')) }}">Logout</a></li>
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
