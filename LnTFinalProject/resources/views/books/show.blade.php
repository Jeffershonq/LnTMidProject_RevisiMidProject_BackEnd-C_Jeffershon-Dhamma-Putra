@extends('books.layout')
@section('content')
 
 
<div class="card m-5">
  <div class="card-header bg-dark text-white">Detail Buku</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Judul : {{ $books->judul }}</h5>
        <p class="card-text">Penulis : {{ $books->penulis }}</p>
        <p class="card-text">Jumlah : {{ $books->jumlah }}</p>
        <p class="card-text">Terbit : {{ $books->terbit }}</p>
  </div>
       
    </hr>
  
  </div>
</div>