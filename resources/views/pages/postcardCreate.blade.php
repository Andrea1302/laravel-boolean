@extends('layouts.main-layout')

@section('content')
<div class="container">
    <form enctype="multipart/form-data" action="{{route('store')}}" method="POST">
        @method('post')
        @csrf
        <div class="form-control">
            <label for="sender">Sender</label>
            <input type="text" name="sender">
        </div>
        <div class="form-control">
            <label for="address">Address</label>
            <input type="text" name="address">
        </div>
        <textarea name="text" id="" cols="30" rows="10" placeholder="inserisci testo"></textarea>
        <div class="form-control">
            <label for="image">Immagine</label>
            <input type="file" name="image">
        </div>
       
     
       

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    
@endsection