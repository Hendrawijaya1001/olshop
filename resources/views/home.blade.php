@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-4">
        <img src="{{ url('image/1.jpeg')}}" class="rounded mx-auto d-block" width="500" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
  <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class= "card-img-top"  alt="...">
  <div class="card-body">
  <h5 class="card-title">{{ $barang->nama_barang}}</5>
    <p class="card-text">
    <strong>Harga :</strong> Rp. {{number_format ($barang->harga)}} <br>
    <strong>Stok :</strong> {{$barang->stok}} <br>
    <br>
    <strong>Keterangan :</strong><br>
    {{$barang->keterangan}}
    </p>
    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary">
    <i class="fas fa-cart-plus"></i>Pesan</a>
    </div>
    </div>
    </div>
        @endforeach
    </div>
</div>
@endsection
