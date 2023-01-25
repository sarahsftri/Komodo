@extends("layouts.master")

@section('content')
<br><br><br>
<body style="background-color: #BFC5A2">
    <br>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2 class="py-3">Ticket</h2>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col"> Qty</th>
                <th scope="col">Total (IDR)</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($history as $hist)
                    @if($hist->type == 'Ticket')
                    <tr>
                        <th scope="row"></th>
                        <td><p>{{$hist->created_at->format('d-m-Y')}}</p></td>
                        <td><p>{{$hist->total_quantity}}</p></td>
                        <td> <p style="color: green;">{{$hist->total_price}}</p></td>
                        <td><a href="/view-history/{{$hist->id}}">...</a></td>
                      </tr>
                    @endif
                @endforeach

            </tbody>
          </table>

    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2 class="py-3">Merchandise</h2>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> Qty</th>
                    <th scope="col">Total (IDR)</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $hist)
                    @if($hist->type == 'Merchandise')
                    <tr>
                        <th scope="row"></th>
                        <td><p>{{$hist->created_at->format('d-m-Y')}}</p></td>
                        <td><p>{{$hist->merchandise_histories[0]->name}}</p></td>
                        <td><p>{{$hist->total_quantity}}</p></td>
                        <td> <p style="color: green;">{{$hist->total_price}}</p></td>
                        <td><a href="/view-history/{{$hist->id}}">...</a></td>
                      </tr>
                    @endif
                @endforeach

            </tbody>
          </table>

    </div>
    <div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
        <h2 class="py-3">Donation</h2>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Amount of Donation (IDR)</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($history as $hist)
                    @if($hist->type == 'Donation')
                    <tr>
                        <th scope="row"></th>
                        <td><p>{{$hist->created_at->format('d-m-Y')}}</p></td>
                        <td><p style="color: green;">{{$hist->donation->amount}}</p></td>


                      </tr>

                    @endif
                @endforeach

            </tbody>
          </table>
    </div>
</body>
@endsection
