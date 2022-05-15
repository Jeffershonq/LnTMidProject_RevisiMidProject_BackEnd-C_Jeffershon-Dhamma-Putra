@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header bg-dark text-white">Buku Baru</div>
  <div class="card-body">
      
      <form action="{{ url('books') }}" method="post">
        {!! csrf_field() !!}
        <label>Judul</label></br>
        <input type="text" name="judul" id="judul" class="form-control"></br>
        @error('judul')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Penulis</label></br>
        <input type="text" name="penulis" id="penulis" class="form-control"></br>
        @error('penulis')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Jumlah</label></br>
        <input type="text" name="jumlah" id="jumlah" class="form-control"></br>
        @error('jumlah')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label>Terbit</label></br>
        <input type="text" name="terbit" id="terbit" class="form-control"></br>
        @error('terbit')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="submit" value="Simpan" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop