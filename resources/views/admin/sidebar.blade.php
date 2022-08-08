<header>
    <div class="container-fluid">
        <div class="l-sidebar" id="sidebar">
            <div class="wrapper">
                <nav id="sidebar">
                    <a href="" class="sidebar__logo">
                        <img src="{{ asset('src/img/mor.jpg.png') }}" alt="Insullusion" class="sidebar__logo-icon">
                    </a>
                    <div class="sidebar__toggle" id="sidebar-toggle">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <ul class="sidebar__list components">
                        <li class="active">
                            <a href="#listUser" data-toggle="collapse" aria-expanded="false"
                                class="sidebar__link dropdown-toggle">User</a>
                            <ul class="collapse" id="listUser">
                                <li>
                                    <a href="./user/list" class="sidebar__link w-50" aria-expanded="false">List
                                        User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#listCv" data-toggle="collapse" aria-expanded="false"
                                class="sidebar__link dropdown-toggle">Cv</a>
                            <ul class="collapse" id="listCv">
                                <li>
                                    <a href="./cv/list" class="sidebar__link w-50">List CV</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#listConfirm" data-toggle="collapse" aria-expanded="false"
                                class="sidebar__link dropdown-toggle">Confirm Schedule</a>
                            <ul class="collapse" id="listConfirm">
                                <li>
                                    <a href="./confirm/list" class="sidebar__link w-50">List Confirm</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
