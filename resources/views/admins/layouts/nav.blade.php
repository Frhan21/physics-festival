{{-- <nav class="sidenav" id="sidenav">
    <div class="navbrand">
        <div class="img"></div>
        <!-- <img class="rounded" src='../img/harto-chan.jpg'> -->
        <a href="profil/index.html" class="w-50"><img src="/img/Logo PF.png" alt="logo PF"></h2></a>
    </div>
    <ul class="navmenu">
        <li class="navmenu-item"><a href="{{ route('admin') }}" class="navmenu-link">Dashboard</a></li>
        <li>
            <a href="{{ route('users') }}" class="navmenu-link">
                Account User
            </a>
        </li>
        <li>
            <a href="{{ route('post') }}" class="navmenu-link">
                Pengunguman
            </a>
        </li>
    </ul>
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
<header class="header">
    <div class="burgermenu" id="burgermenu">
        <span class="burgermenu-open" id="openmenu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
                <g fill="#252a32" fill-rule="evenodd">
                    <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
                </g>
            </svg>
        </span>
        <span class="burgermenu-close" id="closemenu">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                <path fill="#ffffff" fill-rule="evenodd"
                    d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
            </svg>
        </span>
    </div>
</header> --}}

<nav class="sidenav" id="sidenav">
    <div class="navbrand">
        <div class="img"></div>
        <!-- <img class="rounded" src='../img/harto-chan.jpg'> -->
        <a href="{{ route('dashboard') }}">
            <h2 class="title title-medium">PFXXIV</h2>
        </a>
    </div>
    <ul class="navmenu">
        <li class="navmenu-item"><a href="{{ route('admin') }}" class="navmenu-link text-decoration-none">Home</a>
        </li>
        <li class="navmenu-item"><a href="{{ route('post') }}" class="navmenu-link text-decoration-none">Pengunguman</a></li>
        <li class="navmenu-item">
            <a href="{{ route('users') }}" class="navmenu-link text-decoration-none">Daftar Pengguna</a>
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
            <a href="#" class="social-item"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-item"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-item"><i class="fa fa-youtube "></i></a>

        </div>
        <div class="attrib">
            &copy;Copyright 2022 - Physics Festival <i class="ion ion-md-heart"></i>
        </div>
    </div>
</nav>


