@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        @foreach ( as )
        <div class="item-image">
            <img src="{{asset('#')}}">
        </div>
        <div class="item-detail mt-3">
            <h5>
                {{$apa->apa->name}}
            </h5>

            <p>Quantity: {{$apa>quantity}}</p>

            <p>Total Price: IDR {{$apa = $apa->apa->apa * $apa->quantity}}</p>
        </div>
        @endforeach
    </div>
</body>
@endsection
