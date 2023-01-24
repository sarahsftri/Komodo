<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save Komodo</title>
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('partials.bootstrap')
</head>

<body>
    {{-- NAVBAR GUEST --}}
    @include('partials.navbar_guest')
    {{-- @include('partials.navbar_member') --}}


    {{-- SLIDER --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="" data-slide-to="0" class="active"></li>
            <li data-target="" data-slide-to="1"></li>
            <li data-target="" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="https://i.pinimg.com/564x/07/75/e7/0775e73e023c40d84bbf30f481bfa14b.jpg" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="https://i.pinimg.com/564x/18/99/fc/1899fc523089403343d83dbf8c0f9f92.jpg" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="https://i.pinimg.com/564x/18/99/fc/1899fc523089403343d83dbf8c0f9f92.jpg" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div>
        @yield('homepage')
    </div>

    {{-- FOOTER --}}
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="img-center">
            <img src="https://i.pinimg.com/564x/0b/10/52/0b105243af5ce8a7dd5a5de92c4c5c81.jpg"
                class="small-centered-image" alt="" srcset="">
        </div>
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: saveKomodo.com
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
