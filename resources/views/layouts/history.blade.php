@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Ticket</h2>
        @foreach ($history as $hist)
        @if($hist->type == 'Ticket')
        <div class="item-image">
            <img src="{{asset('#')}}">
        </div>
        <div class="item-detail mt-3">
            <h5>
                Ticket ID: {{$hist->ticket->id}}
            </h5>

            <p>Quantity: {{$hist->quantity}}</p>

            <p>Total Price: IDR {{$hist->total_price}}</p>
        </div>
        @endif
        @endforeach
    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Merchandise</h2>
        @foreach ($history as $hist)
        @if($hist->type == 'Merchandise')
        <div class="item-image">
            <img src="{{asset('#')}}">
        </div>
        <div class="item-detail mt-3">
            <h5>
                Ticket ID: {{$hist->ticket->id}}
            </h5>

            <p>Quantity: {{$hist->quantity}}</p>

            <p>Total Price: IDR {{$hist->total_price}}</p>
        </div>
        @endif
        @endforeach
    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Donation</h2>
        @foreach ($history as $hist)
        @if($hist->type == 'Donation')
        <div class="item-image">
            <img src="{{asset('#')}}">
        </div>
        <div class="item-detail mt-3">
            <h5>
                Ticket ID: {{$hist->ticket->id}}
            </h5>

            <p>Quantity: {{$hist->quantity}}</p>

            <p>Total Price: IDR {{$hist->total_price}}</p>
        </div>
        @endif
        @endforeach
    </div>
</body>
@endsection
