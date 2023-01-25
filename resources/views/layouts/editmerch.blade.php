@extends('layouts.modifymerch')

@section('title')
    Edit Merchandise
@endsection

@section('action')
    action="/edit-merch/{{$apa->id}}"
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('value-name')
    value='{{$apa->name}}'
@endsection

@section('value-price')
{{$apa->apa}}
@endsection

@section('value-keterangan')
    value={{$actor->DOB}}
@endsection

@section('value-stock')
    value='{{$apa->apa}}'
@endsection

@section('value-image')
    value='{{$apa->apa}}'
@endsection

@section('button')
    <button style="background-color:#98BA80; width:20%" type="submit" class="btn btn-success">Edit Actor</button>
@endsection
