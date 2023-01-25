@extends('layouts.master')

@section('content')

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
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{(Cookie::get('email-cookie')!=null) ? Cookie::get('email-cookie') : ""}}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" value="{{(Cookie::get('password-cookie')!=null) ? Cookie::get('password-cookie') : ""}}">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    @if ($errors->has('credentials'))
                        <p class="text-danger">{{ $errors->first('credentials') }}</p>
                    @endif
                </div>
                <div style="display:flex; flex-direction:row">
                    <input style="width: 1em" type="checkbox" name="remember" id="remember" checked={{Cookie::get('email-cookie')!=null}}>
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
