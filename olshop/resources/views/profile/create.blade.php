@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Product</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-pencil-alt"></i> Tambah Product</h4>
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Nama Product</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_barang" placeholder="Contoh : Baju Tangan Panjang" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nohp" class="col-md-2 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="harga" placeholder="150000" min="1" required>

                                @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">Stok</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="stok" placeholder="5" min="1" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-2 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection