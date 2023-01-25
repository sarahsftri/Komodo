@include('partials.bootstrap')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            @if(!Auth::check() || Auth::user()->role != 'member')

            @elseif(Auth::user()->role == 'member')
            <li class="nav-item">
                <a class="nav-link" href="/donation">Donation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ticket">Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Merchandise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">History</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if(!Auth::check())
            <li class="nav-item">
                <a class="btn btn-primary" href="/login" role="button">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary" href="/register" role="button">Register</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link">Welcome, User</a>
            </li>
            <li class="nav-item" href="/logout">
                <a class="nav-link">Logout</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
