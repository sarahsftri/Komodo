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
                    height: 250px; border-radius: 10px; margin: 40px;"
                        src="https://i.pinimg.com/564x/18/b5/b5/18b5b599bb873285bd4def283c0d3c09.jpg">
                        {{-- <div> --}}
                            <span class="name-tag font-weight-bold">Diva Angelika</span>
                            <span class="name-tag text-black-50">diva@mail.com</span>
                        {{-- </div> --}}
                </div>
            </div>

            <div class="col">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        {{-- <div class="col-md-6">
                            <label class="labels">Name</label>
                            <div class="member-name">
                                <h4>Diva</h4>
                            </div>
                            {{-- <input type="" class="form-control" value="Diva">
                        </div>
                        <div class="col-md-6"><label class="labels">Surname</label>
                            {{-- <input type="text"
                                class="form-control" value="" >
                        </div>--}}
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Enter Phone Number" value="">
                        </div>


                        <div class="col-md-12">
                            <label class="labels">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" value="">
                        </div>

                        <div class="mt-5 text-center" >
                            <button class="btn btn-primary profile-button" style="float: right; background-color: #98BA80;" type="button">Save Profile</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
