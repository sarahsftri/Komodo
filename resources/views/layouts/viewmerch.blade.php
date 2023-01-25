@extends("layouts.master")

@section('content')
<br><br><br>
<body style="background-color: #BFC5A2">
    <br>
    @if (!Auth::check() || Auth::user()->role != 'admin')

    @elseif(Auth::user()->role == 'admin')
    <div class="container pl-5 pb-4 ml-5 row">
        <button class="btn btn-primary" style="background-color: #98BA80; width: auto" onclick="window.location='/update-merchandise/{{$merchandise->id}}'">Edit Merchandise</button>
        <form method="POST" action="/delete-merchandise/{{$merchandise->id}}" style="width: auto">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" style="background-color: #98BA80" type="submit">Delete Merchandise</button>
        </form>
    </div>
    @endif
    <div class="container mb-5" style = "background-color: #FFFFFF; border-radius: 25px;">
        <div class="col mb-5">
            <div class="card h-100" style="display: flex; justify-content:center; align-items:center">
                <img class="card-img-top" src="{{url($merchandise->image)}}" alt="..." style="width: 20rem"/>
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
