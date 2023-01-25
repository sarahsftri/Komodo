@extends('layouts.modifymerch')

@section('title')
    Add merchandise
@endsection

@section('action')
    action="/add-merch"
@endsection

@section('value-image')
    required
@endsection

@section('button')
    <button style="background-color:#98BA80; width: 20%" type="submit" class="btn btn-success">Add Merchandise</button>
@endsection
