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
                <h3 text-align="center">What You’ll Experience</h3><br>
                <p>
                    Break free from your hectic routine by visiting Komodo Island. enjoy a holiday that will take you to explore Komodo Island and Pink Beach. You will be spoiled with charming views along the way from Komodo Island to Pink Beach. At Pink Beach, you can do snorkeling to see the natural beauty under the water. Most importantly, make sure your camera is ready to capture every special moment spent there!
                </p>

                <p>Price: Rp. 1.000.000</p>
                <label>Quantity</label>
                <input type="quantity" name="quantity" class="form-control" placeholder="Enter amount of tickets">
                @error('quantity')
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
