@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
@endsection

@section('homepage')
    <div class="cart-main d-flex flex-row">
        <div class="left-container p-5 d-flex flex-column justify-content-between">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="d-inline">| Your Shopping Cart</h3>
                <p class="d-inline m-0 fs-5 fw-bold text-secondary">{{$quantity}} item(s)</p>
            </div>
            @if ($quantity == 0)
            <div class="items d-flex flex-column gap-3" style="justify-self: self-start">
                <div class="item d-flex flex-row align-items-center">
                    <div class="card card-body d-flex flex-row align-items-center gap-3">
                        <h4>Your cart is currently empty!</h4>
                    </div>
                </div>
            </div>
            @endif
            @foreach ($merchandises as $item)
            <div class="items d-flex flex-column gap-3" style="justify-self: self-start">
                <div class="item d-flex flex-row align-items-center">
                    <div class="card card-body d-flex flex-row align-items-center gap-3">
                        <img src="{{url($item->merchandise->image)}}"
                             alt="item-image" width="50" height="50">
                        <p class="p-0 m-0 fs-5">{{$item->merchandise->name}}</p>
                        <form method="POST" action="/reduce-quantity/{{$item->merchandise->id}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-primary" style="background-color: #98BA80"><span class="material-symbols-outlined fs-4">-</span></button>
                        </form>
                        <p class="p-0 m-0 fs-5">{{$item->quantity}}</p>
                        <form method="POST" action="/add-quantity/{{$item->merchandise->id}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-primary" style="background-color: #98BA80"><span class="material-symbols-outlined fs-4">+</span></button>
                        </form>

                    </div>
                    <form method="POST" action="/remove-from-cart/{{$item->merchandise->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn p-4 fw-bold m-0"><span class="material-symbols-outlined fs-4">close</span></button>
                    </form>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="fw-bold btn p-0 m-0">&lt;&lt; Back to Shop</a>
                <div class="total p-3">
                    <p class="fw-bold fs-5 m-0">Total Rp. {{$price}}</p>
                </div>
            </div>
        </div>
        <form class="right-container p-5 gap-3 d-flex flex-column justify-content-between" action="/check-out" method="POST">
            @csrf
            <h3>| Summary</h3>
            <div class="payment">
                <h5>Payment Method</h5>
                <div class="d-flex flex-row">
                    <label class="m-0 p-0">
                        <input type="radio" name="payment" class="card-input-element" value="BCA"/>
                        <div class="card card-default card-input">
                            <div class="card-body">
                                <img src="https://www.bca.co.id/-/media/Feature/Card/List-Card/Tentang-BCA/Brand-Assets/Logo-BCA/Logo-BCA_Biru.png" alt="logo-bca" width="100" height="50">
                            </div>
                        </div>
                    </label>
                    <label class="m-0 p-0">
                        <input type="radio" name="payment" class="card-input-element" value="mandiri"/>
                        <div class="card card-default card-input">
                            <div class="card-body">
                                <img src="https://www.bankmandiri.co.id/image/layout_set_logo?img_id=31567&t=1674406926947" alt="logo-mandiri" width="100" height="50">
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="card information">
                <label for="card" class="fs-5">Card Information</label>
                <input type="text" class="form-control" id="cardId" name="cardId" placeholder="CC Number">
                <input type="text" class="form-control" id="expDate" name="expDate" placeholder="Expired Date">
                <input type="text" class="form-control" id="secCode" name="secCode" placeholder="Security Code">
            </div>
            <div class="ship">
                <label for="address" class="fs-5">Shipping</label>
                <textarea class="form-control" id="address" name="address" placeholder="Input your address" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark">Checkout</button>
        </form>
    </div>
@endsection
