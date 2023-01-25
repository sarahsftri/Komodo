@extends('layouts.modifymerch')

@section('title')
    Edit Merchandise
@endsection

@section('action')
    action="/update-merchandise/{{$merchandise->id}}"
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('value-name')
    value='{{$merchandise->name}}'
@endsection

@section('value-price')
    value='{{$merchandise->price}}'
@endsection

@section('value-detail')
{{$merchandise->detail}}
@endsection

@section('value-stock')
    value='{{$merchandise->stock}}'
@endsection

@section('button')
    <button style="background-color:#98BA80; width:20%" type="submit" class="btn btn-success">Edit Merchandise</button>
@endsection
