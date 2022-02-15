@extends('layouts.main-layout')
@section('content')
    <div id="create">
        <a class="btn btn-primary" href="{{route('create')}}">Create new Postcard</a>
    </div>
    <postcards-component user="{{Auth::check()}}"> </postcards-component>

@endsection