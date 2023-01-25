@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                    <img class="mt-5"
                        style="  width: 250px;
                    height: 250px; border-radius: 10px; margin: 40px;"
                        src="https://i.pinimg.com/564x/18/b5/b5/18b5b599bb873285bd4def283c0d3c09.jpg" id="output">

                    <span class="name-tag font-weight-bold">@if($user->name == null) - @else {{$user->name}} @endif</span>
                    <span class="name-tag text-black-50">{{$user->email}}</span>

                    {{-- <button class="btn btn-primary profile-button-save" style="float: left;" type="button">
                        <a href="/profile" style="text-decoration: none; color: white">
                            Edit Profile Picture
                        </a>
                    </button> --}}
                    {{-- </div> --}}
                </div>
            </div>

            <div class="col">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Your Profile</h4>
                    </div>
                    <div class="row mt-2">
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="not updated yet" value="{{$user->name}}" readonly>
                        </div>


                        <div class="col-md-12">
                            <label class="labels">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="not updated yet" value="{{$user->phone_number}}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="not updated yet" value="{{$user->address}}" readonly>
                        </div>

                        <div class="mt-5 text-center">
                            <button class="btn btn-outline-success profile-button-edit" style="float: left;" type="button">
                                <a href="/edit-profile" style="text-decoration: none; color: green">Edit Profile</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
