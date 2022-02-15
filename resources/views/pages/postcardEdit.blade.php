@extends('layouts.main-layout')

@section('content')
<div class="container">
    <form enctype="multipart/form-data" action="{{route('update.postcard')}}" method="POST">
        @method('post')
        @csrf
        <div class="form-control">
            <label for="sender">Sender</label>
            <input type="text" name="sender" value="{{$postcard -> sender}}">
        </div>
        <div class="form-control">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{$postcard -> address}}">
        </div>
        <textarea name="text" id="" cols="30" rows="10"  value="{{$postcard -> text}}"></textarea>
        <div class="form-control">
            <label for="image">Immagine</label>
            <input type="file" name="image" value="{{$postcard -> image}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection