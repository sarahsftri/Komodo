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
    @include('partials.navbar')

    {{-- NAVBAR MEMBER --}}
    {{-- @include('partials.navbar_member') --}}
    @yield('extra-css')

    <div>
        @yield('homepage')
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="text-center text-white" style="background-color: #4A5E55;">
        <br>
        <div class="img-center">
            <img src="https://i.pinimg.com/564x/0b/10/52/0b105243af5ce8a7dd5a5de92c4c5c81.jpg"
            class="small-centered-image" alt="" srcset="">
        </div>
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                data-mdb-ripple-color="light"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                data-mdb-ripple-color="light"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                data-mdb-ripple-color="light"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                data-mdb-ripple-color="light"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                    data-mdb-ripple-color="light"><i class="fab fa-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                    data-mdb-ripple-color="light"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #4A5E55;">
                © 2023 Copyright: saveKomodo.com
            </div>
            <!-- Copyright -->
        </footer>


    </body>
</html>
