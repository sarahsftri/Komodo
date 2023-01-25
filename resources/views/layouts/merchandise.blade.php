@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchandise.css') }}">
@endsection

@section('content')
<body style="background-color: #BFC5A2">
    @if (!Auth::check() || Auth::user()->role != "admin")
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <form class="d-flex" action="/cart">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">{{$cart_quantity}}</span>
                    </button>
                </form>
            </button>
        </div>
    </nav>
    @elseif(Auth::user()->role == "admin")
    <button class="btn btn-primary" style="background-color: #98BA80; width: auto" onclick="window.location='/insert-merchandise/{{$merchandise->id}}'">Add Merchandise</button>
    @endif

    <!-- Latest Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div>
                <h1 style="margin-bottom: 2%">Latest</h1>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($latest as $new)
                <div class="col mb-5">
                    <div class="card h-100" onclick="window.location='/view-merchandise/{{$new->id}}'">
                        <img class="card-img-top" src="{{url($new->image)}}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{$new->name}}</h5>
                                {{$new->price}}
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form class="text-center" method="POST" action="/add-to-cart/{{$new->id}}">
                                @csrf
                                <button type="submit" class="btn btn-outline-dark mt-auto">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- All Merch --}}
    <section class="py-2">
        <div class="container px-4 px-lg-5 mt-5">
            <div>
                <h1 style="margin-bottom: 2%">Merchandise</h1>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($merch as $item)
                <div class="col mb-5">
                    <div class="card h-100" onclick="window.location='/view-merchandise/{{$item->id}}'">
                        <img class="card-img-top" src="{{url($item->image)}}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{$item->name}}</h5>
                                {{$item->price}}
                            </div>
                        </div>
                        @if(!Auth::check() || Auth::user()->role != "admin")
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form class="text-center" method="POST" action="/add-to-cart/{{$item->id}}">
                                @csrf
                                <button type="submit" class="btn btn-outline-dark mt-auto">Add to Cart</button>
                            </form>
                        </div>
                        @elseif(Auth::user()->role == "admin")

                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
@endsection
