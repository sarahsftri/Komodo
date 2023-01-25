@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
    @if($history->type == "Ticket")
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Ticket</h2>
    </div>
        <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        @foreach ($history->ticket_histories as $ticket)
            <div class="item-image">
                <img src="images/ticket.jpg">
            </div>
            <div class="item-detail mt-3">
                <h5>
                    Ticket ID: {{$ticket->id}}
                </h5>
            </div>
        @endforeach
            <p>Quantity: {{$history->total_quantity}}</p>

            <p>Total Price: IDR {{$history->total_price}}</p>

            <p>Date: {{$history->created_at->format('d-m-Y')}}</p>
        </div>
    </div>
    @elseif ($history->type == "Merchandise")
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Merchandise</h2>
    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        @foreach ($history->merchandise_histories as $merchandise)
            <div class="item-image">
                <img src="{{url($merchandise->image)}}">
            </div>
            <div class="item-detail mt-3">
                <h5>
                    {{$merchandise->name}}
                </h5>

                <p>Price: {{$merchandise->price}}</p>
            </div>
        @endforeach
            <p>Total Quantity: {{$history->total_quantity}}</p>

            <p>Total Price: IDR {{$history->total_price}}</p>

            <p>Date: {{$history->created_at->format('d-m-Y')}}</p>
        </div>
    </div>
    @endif
    </div>
</body>
@endsection
