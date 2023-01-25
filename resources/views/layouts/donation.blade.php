@extends("layouts.master")

@section('content')

<body style="background-color: #BFC5A2">
    <br>
<div class="container" style = "background-color: #FFFFFF; border-radius: 25px;">
    <div class="row">
      <div class="col">
        <div class="card border-20" style="margin: 50px">
            <img class="" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg"
                alt="Card image cap">
        </div>
      </div>
      <div class="col" style="margin: 50px">
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label>Amount</label>
                <input type="amount" name="amount" class="form-control" placeholder="Enter quantity">
                @error('amount')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Submit" class="btn btn-primary" style="background-color: #98BA80">
            <br>
            </div>
            <br>
        </form>
      </div>
      <div class="w-100"></div>
    </div>
  </div>
</body>
@endsection
