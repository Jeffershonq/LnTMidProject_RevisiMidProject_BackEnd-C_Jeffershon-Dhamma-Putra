@extends('books.layout')
@section('content')
 
<div class="card m-5">
  <div class="card-header bg-dark text-white">Edit Buku</div>
  <div class="card-body">
      
      <form action="{{ url('books/' .$books->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Judul</label></br>
        <input type="text" name="judul" id="judul" value="{{$books->judul}}" class="form-control"></br>
        @error('judul')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Penulis</label></br>
        <input type="text" name="penulis" id="penulis" value="{{$books->penulis}}" class="form-control"></br>
        @error('penulis')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Jumlah</label></br>
        <input type="text" name="jumlah" id="jumlah" value="{{$books->jumlah}}" class="form-control"></br>
        @error('jumlah')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Terbit</label></br>
        <input type="text" name="terbit" id="terbit" value="{{$books->terbit}}" class="form-control"></br>
        @error('terbit')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop