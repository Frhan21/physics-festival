<nav class="sidenav" id="sidenav">
    <div class="navbrand">
        <div class="img"></div>
        <!-- <img class="rounded" src='../img/harto-chan.jpg'> -->
        <a href="{{ route('dashboard') }}">
            <h2 class="title title-medium">PFXXIV</h2>
        </a>
    </div>
    <ul class="navmenu">
        <li class="navmenu-item"><a href="{{ route('dashboard') }}" class="navmenu-link text-decoration-none">Home</a>
        </li>
        <li class="navmenu-item"><a href="{{ route('posts') }}" class="navmenu-link text-decoration-none">Pengunguman</a></li>
        <li class="btn-group navmenu-item">
            <div type="button" class="navmenu-link "> <a href="{{ route('events') }}" class="text-decoration-none text-white">Events</a></div>
            <button type="button" class="dropdown-toggle dropdown-toggle-split border-0" data-bs-toggle='dropdown'
                aria-haspopup="true" aria-expanded="false" style="background: none;color:white">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu border-0" style="background-color:white;">
                @foreach ($events as $event)
                    <a href="/dashboard/create?title={{ $event->title }}" class="dropdown-item navmenu-link" style="font-size: 12px;color:black">{{ $event->title }}</a>
                    <div class="dropdown-divider"></div>
                @endforeach
            </div>
        </li>

    </ul>
    <div class="navbar-nav"></div>
    <div class="navbar-nav"></div>
    <div class="navbar-nav"></div>
    <div class="navbar-nav"></div>
    <div class="navbar-nav"></div>
    <div class="navbar-nav"></div>
    <div class="navinfo">
        <div class="social">
            <a href="#" class="social-item"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-item"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-item"><i class="bi bi-youtube"></i></a>

        </div>
        <div class="attrib">
            &copy;Copyright 2022 - Physics Festival <i class="ion ion-md-heart"></i>
        </div>
    </div>
</nav>
