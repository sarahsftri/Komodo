@extends('layouts.master')

@section('content')
{{-- <!DOCTYPE html>
<html lang="en"> --}}

{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Log in</title>
    <style type="text/css">
    .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
    }
    </style>
</head> --}}

<body style="background-color: #BFC5A2">
    <br>
    <div class="container box" style="background-color: #ffffff; border-radius: 25px;">
        <br>
        <h3 text-align="center">Login</h3><br>
        @auth
            You are already logged in. Go to the <a href="/">Main Page</a>.
        @else
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{(Cookie::get('mycookie')!=null) ? Cookie::get('mycookie') : ""}}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    @if ($errors->has('credentials'))
                        <p class="text-danger">{{ $errors->first('credentials') }}</p>
                    @endif
                </div>
                <div style="display:flex; flex-direction:row">
                    <input style="width: 1em" type="checkbox" name="remember" id="remember" checked={{Cookie::get('mycookie')!=null}}>
                    <label>Remember me</label>
                    <br>
                </div>
                <input type="submit" value="Login" class="btn btn-primary" style="background-color: #98BA80">

                <p> Don't have an account? <span style="color: #98BA80" onclick="window.location='/register'">Register now!</span></p>
                <br>
                </div>
                <br>
            </form>
        @endif
    </div>
</body>
{{-- </html> --}}
@endsection
