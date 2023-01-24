@extends("layouts.master")

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3 d-flex justify-content-center">
            <div class="card border-0" style="margin: 30px">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg"
                            alt="Card image cap">
                    </div>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="amount" name="amount" class="form-control" placeholder="Enter amount donation">
                            @error('amount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <br>
                        <input type="submit" value="Submit" class="btn btn-primary" style="background-color: #98BA80">
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
