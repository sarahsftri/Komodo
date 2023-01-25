@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="mt-5" style="  width: 250px;
                    height: 250px; border-radius: 10px;"
                        src="https://i.pinimg.com/564x/18/b5/b5/18b5b599bb873285bd4def283c0d3c09.jpg">


                    <div class="col-md-8" style="margin: 8%;">
                        <div class="form-group-1">

                            <label class="labels" for="update-name" style="float: left;">New Username
                            </label>

                            <input type="text" class="form-control" placeholder="Diva Angelika" value=""
                                id="update-name">
                        </div>

                        <div class="form-group-2" style="margin-top: 5%">

                            <label class="labels" for="update-name" style="float: left;">Current Email
                            </label>
                            <br>
                            <input type="text" class="form-control" placeholder="diva@mail.com" value=""
                                id="update-name" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Update Profile</h4>
                    </div>
                    <div class="row mt-2">
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Enter phone number" value="">
                        </div>


                        <div class="col-md-12">
                            <label class="labels">State</label>
                            <input type="text" class="form-control" placeholder="Enter your state" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="Your country" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" placeholder="Enter your address line" value="">
                        </div>

                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button-save" style="float: left;" type="button">
                                <a href="/profile" style="text-decoration: none; color: white">
                                    Save
                                Profile
                                </a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
