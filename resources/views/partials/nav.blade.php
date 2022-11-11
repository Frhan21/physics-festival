{{-- <nav class="navbar navbar-expand-lg bg-light mt-3">
    <div class="container">
        <a class="navbar-brand px-3" href="#"> <img
                src="/img/WhatsApp_Image_2021-12-27_at_13.24.42-removebg-preview.png"lt="Logo" width="30"
                class="d-inline-block align-text-top"> PHYSICS FESTIVAL XXIV <img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Events
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lomba Fisika</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                <li class="nav-item">
                    <a class="nav-link active">Contact Us</a>
                </li>
            </ul>

            {{-- Login dan Sign Up --}}
{{-- Keadaan Setelah Login --}}
{{-- <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome Back {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      @if (auth()->user()->name == 'Admin Physics Festival Unand')
                      <li><a class="dropdown-item" href="{{ route('admin') }}"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      @else
                      <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      @endif
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                        </form>
                    </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active  " aria-current="page" href="/login" role="button"> <i class="bi bi-box-arrow-in-right"></i> Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-dark  text-light rounded" href="/register"> <i class="bi bi-card-checklist"></i> Daftar Sekarang</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav> --}}

<header class="sticky-top">
    <nav class="py-3 mx-auto navbar navbar-expand-lg">

        <!-- Brand -->
        <a class="navbar-brand" href="/home"><img src="/img/WhatsApp_Image_2021-12-27_at_13.24.42-removebg-preview.png" width="40px" alt=""> <span></span><img src="/img/PF24(3).png" alt="" style="width: 100px;"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bx bx-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0"></ul>

            <!-- Bagian Tengah -->
            <ul class="navbar-nav ms-5 mt-2 mt-lg-0">
                <li class="nav-item px-1">
                    <a class="nav-link active" href="/home" aria-current="page">Home <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="#events">Events</a>
                </li>
                <!-- <li class="nav-item px-1">
                <a class="nav-link" href="#teams">Our Teams</a>
            </li> -->
                <li class="nav-item px-1">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- log in | sign up -->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome Back {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->name == 'Admin Physics Festival Unand')
                                <li><a class="dropdown-item" href="{{ route('admin') }}"> <i
                                            class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            @else
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"> <i
                                class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log
                                        Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav mt-2">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link log-in">Log in</a>
                        <!-- <a name="" id="" class="btn btn-secondary bg-white log-in" href="#" role="button">Log in</a> -->
                    </li>
                    <li class="nav-item">
                        <a name="" id="" class="btn btn-primary sign-up" href="{{ route('register') }}"
                            role="button">Sign up</a>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>
</header>
