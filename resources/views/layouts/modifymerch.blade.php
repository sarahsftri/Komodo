{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

@include('header') --}}

@extends("layouts.master")

@section('content')
<br><br><br>
<body>
    <form class="p-5" method="POST" enctype="multipart/form-data" @yield('action')>
        @csrf
        @yield('method')
        <div class="title">
            <h1>@yield('title')</h1>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control text-black bg-light" type="text" id="name" name="name" @yield('value-name')>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Price</label>
            <input class="form-control text-black bg-light" type="text" name="price" @yield('value-price')/>
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Detail</label>
            <textarea class="form-control text-black bg-light" rows="3" name="detail">@yield('value-detail')</textarea>
            @error('detail')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Stock</label>
            <input class="form-control text-black bg-light" type="text" name="stock" @yield('value-stock')/>
            @error('stock')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Image Url</label>
            <input class="form-control text-black bg-light" type="file" id="image" name="image" accept="image/*, .jpeg, .jpg, .png, .gif" @yield('required-image')>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
        </div>

        @yield('button')
        <br><br>
    </form>
</body>
{{-- @include('footer') --}}
@endsection
