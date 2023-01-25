@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
    @if (!Auth::check() || Auth::user()->role != 'admin')

    @elseif(Auth::user()->role == 'admin')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <button class="bg-dark text-white" onclick="window.location='/update-merchhandise/{{$merchandise->id}}'" style="width: 10%">Edit Movie</button>
            <form method="POST" action="/delete-merchandise/{{$merchandise->id}}" style="width: 10%">
                @csrf
                @method('DELETE')
                <button class="bg-dark text-white" type="submit">Delete Movie</button>
            </form>
        </div>
    </nav>
    @endif
    <div class="container mb-5" style = "background-color: #FFFFFF; border-radius: 25px;">
        <div class="col mb-5">
            <div class="card h-20">
                <img class="card-img-top" src="{{url($merchandise->image)}}" alt="..." />
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">{{$merchandise->name}}</h5>
                        {{$merchandise->price}}
                    </div>
                </div>
                @if(!Auth::check() || Auth::user()->role != "admin")
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form class="text-center" method="POST" action="/add-to-cart/{{$merchandise->id}}">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to Cart</button>
                        </form>
                    </div>
                @elseif(Auth::user()->role == "admin")

                @endif
            </div>
        </div>
    </div>
@endsection
