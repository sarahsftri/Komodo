@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Diva</span><span class="text-black-50">diva@mail.com</span><span>
                    </span>
                </div>
            </div>

            <div class="col">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <div class="member-name">
                                <h4>Diva</h4>
                            </div>
                            {{-- <input type="" class="form-control" value="Diva"> --}}
                        </div>
                        <div class="col-md-6"><label class="labels">Surname</label>
                            {{-- <input type="text"
                                class="form-control" value="" > --}}
                        </div>
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="enter phone number" value="">
                        </div>


                        <div class="col-md-12">
                            <label class="labels">State</label>
                            <input type="text" class="form-control" placeholder="enter address line 2" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" placeholder="enter address line 1" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control" placeholder="enter email id" value="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
