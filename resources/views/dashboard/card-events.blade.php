@extends('dashboard.layouts.main')

@section('style')
<link rel="stylesheet" href="/css/card-events/style.css">
<link rel="icon" type="image/x-icon" href="img/WhatsApp_Image_2021-12-27_at_13.24.42-removebg-preview.png">
@endsection

@section('container')

<main>
    <div class="container ">
        <div class="row d-flex justify-content-center align-item-center m-auto">
            @foreach ($events as $event )
            <div class="kolom scene scene--card col-lg-4 col-md-6 col-12 p-1">
                <div class="events card">
                    <div class="card__face card__face--front">
                         <img src="../../img/poster-lomba/Slice {{ $loop->iteration }}.png" class="w-100 h-100" alt="">
                    </div>
                    <div class="card__face card__face--back">
                        <!-- <div class="head px-3 py-2">Lomba Fisika</div> -->
                        <div class="text px-3 py-2">
                            <div class="head px-3 py-2 fs-4">
                                {{ $event->title }} <br>
                                <a href="/dashboard/create?title={{ $event->title }}" target="_blank"><button type="button" class="btn btn-primary p-2 px-3 mt-2">Daftar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
<script>
    const sideNav = document.getElementById("sidenav");
    const burgerMenu = document.getElementById("burgermenu");

    burgerMenu.addEventListener("click", function () {
        sideNav.classList.toggle("active");
        burgerMenu.classList.toggle("active");
    });

    var cards = document.querySelectorAll('.card');

    [...cards].forEach((card)=>{
        card.addEventListener( 'click', function() {
            card.classList.toggle('is-flipped');
        });
    });
</script>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

@endsection
