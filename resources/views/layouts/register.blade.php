@extends("layouts.master")

@section('content')
<body style="background-color: #BFC5A2">
    <br>
    <div class="container box" style="background-color: #ffffff; border-radius: 25px;">
        <br>
        <h3 text-align="center">Register</h3><br>

        @auth
            Your account is already registered. Go to the <a href="/">Main Page</a>.
        @else
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your confirm password">
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @if ($errors->has('unregistered'))
                        <p class="text-danger">{{ $errors->first('unregistered') }}</p>
                    @endif
                </div>
                <br>
                <input type="submit" value="Register" class="btn btn-primary" style="background-color: #98BA80">

                <p> Already have an account? <span style="color: #98BA80" onclick="window.location='/login'">Login now!</span></p>
                <br>
                </div><br>
            </form>
        @endif
    </div>
</body>

@endsection

