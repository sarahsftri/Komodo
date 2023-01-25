@include('partials.bootstrap')

<nav class="navbar navbar-expand-lg" style="background-color: #4A5E55">
    {{-- <a class="navbar-brand" href="#">Brand</a> --}}
    <div class="nav-logo">
        <a class="navbar-logo" href="/"><img src="{{ url('images/logo_komodo(1).png') }}" alt=""
                class="logo-2"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="/">Home</a>
            </li>
            @if(!Auth::check() || Auth::user()->role == 'member')
            <li class="nav-item">
                <a class="nav-link text-white" href="/donation">Donation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/ticket">Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/merchandise">Merchandise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/history">History</a>
            </li>
            @elseif(Auth::check() && Auth::user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link text-white" href="/merchandise">Merchandise</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link text-white" href="/profile">Profile</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @if(!Auth::check() || Auth::user()->role != "admin")
                <div class="container px-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <form class="d-flex" action="/cart">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                            </button>
                        </form>
                    </button>
                </div>
            @elseif (Auth::user()->role == "admin")

            @endif
            @if(!Auth::check())
            <li class="nav-item">
                <a class="btn btn-primary" style="background-color: #98BA80" href="/login" role="button">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary" style="background-color: #98BA80" href="/register" role="button">Register</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white">Welcome,@if(!Auth::check() || Auth::user()->role != 'admin') User @else Admin @endif</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" style="background-color: #98BA80" href="/logout">Logout</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
