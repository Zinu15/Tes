@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="images/banner.jpg" width="100%" height="100%">
        </div>
      </div>
    </div>
  </div>
  <br>
<div class="container">
    <div class="row justify-content-center">
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('img/'.$barang->gambar) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
