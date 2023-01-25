@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Ticket</h2>
    </div>
        @foreach ($history as $hist)
        @if($hist->type == 'Ticket')
        <div class="container" onclick="window.location='/view-history/{{$hist->id}}'" style = "background-color: #FFFFFF; border-radius: 25px;">
            <div class="item-image">
                <img src="images/ticket.jpg">
            </div>
            <div class="item-detail mt-3">
                <h5>
                    Ticket ID: {{$hist->ticket_histories[0]->id}}
                </h5>

                <p>Quantity: {{$hist->total_quantity}}</p>

                <p>Total Price: IDR {{$hist->total_price}}</p>

                <p>Date: {{$hist->created_at->format('d-m-Y')}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Merchandise</h2>
    </div>
        @foreach ($history as $hist)
        @if($hist->type == 'Merchandise')
        <div class="container" onclick="window.location='/view-history/{{$hist->id}}'" style = "background-color: #FFFFFF; border-radius: 25px;">
            <div class="item-image">
                <img src="{{url($hist->merchandise_histories[0]->image)}}">
            </div>
            <div class="item-detail mt-3">
                <h5>
                    {{$hist->merchandise_histories[0]->name}}
                </h5>

                <p>Quantity: {{$hist->total_quantity}}</p>

                <p>Total Price: IDR {{$hist->total_price}}</p>

                <p>Date: {{$hist->created_at->format('d-m-Y')}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2>Donation</h2>
    </div>
        @foreach ($history as $hist)
        @if($hist->type == 'Donation')
        <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
            <div class="item-image">
                <img src="images/donation.png">
            </div>
            <div class="item-detail mt-3">
                <p>Amount of Donation: {{$hist->donation->amount}}</p>
                <p>Date: {{$hist->created_at->format('d-m-Y')}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</body>
@endsection
