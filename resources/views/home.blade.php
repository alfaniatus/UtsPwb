@extends('mainLayout.main')

@section('container')
<div class="row">
@foreach($allBarang as $no => $barang)
<div class="col-3 col-mb-2">
<div class="card" style="width: 18rem;">
<img src="{{ asset('storage/'.$barang->photo) }}" class="card-img-top"> 
  <div class="card-body">
    <h4 class="card-title">{{ $barang->namaBarang }}</h4>
    <p class="card-text">Rp. {{ number_format($barang->harga, 2 ,',',',') }}</p>
    <p class="card-text">Stok: {{ $barang->stok }}</p>
    <p class="card-text"> <b>{{ $barang->keterangan}}</b></p>
    <a href="{{ route('reviewBarang', $barang->id) }}" class="btn btn-primary ">Cek Produk</a>
  </div>
</div>
</div>
@endforeach
@endsection