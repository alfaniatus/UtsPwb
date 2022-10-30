@extends('mainLayout.main')

@section('container')
<div class="row align-items-start">
    <div class="col">
      <h1>{{ $review_barang->namaBarang }}</h1>
      <p>{{ $review_barang->ulasan }}</p>
      <p>Stok: {{ $review_barang->stok }}</p>
      <p><b>Rp. {{ number_format($review_barang->harga, 2, ',', ',') }}</b></p>
      
    </div>
    <div class="col">
      <img src="{{ asset('storage/'. $review_barang->photo) }}" class="card-img-top">
    </div>
  </div>
@endsection