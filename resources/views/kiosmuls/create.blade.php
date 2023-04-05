@extends('kiosmuls.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data Barang Kios
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada yang salah coiii.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('kiosmuls.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="formcontrol" id="kode_barang" aria-describedby="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="formcontrol" id="nama_barang" aria-describedby="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori Barang</label>
                        <input type="text" name="kategori_barang" class="formcontrol" id="kategori_barang" aria-describedby="kategori_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="formcontrol" id="harga" aria-describedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" name="qty" class="formcontrol" id="qty" aria-describedby="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection