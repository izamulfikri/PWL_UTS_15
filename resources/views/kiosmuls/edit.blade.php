@extends('kiosmuls.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('kiosmuls.update', $kiosmuls->kode_barang }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_barang">kode barang</label>
                        <input type="text" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">nama barang</label>
                        <input type="text" name="nama_barang" class="formcontrol" id="nama_barang" value="{{ $kiosmuls->nama_barang }}" ariadescribedby="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">kategori barang</label>
                        <input type="kategori_barang" name="kategori_barang" class="formcontrol" id="kategori_barang" value="{{ $kiosmuls->kategori_barang }}" ariadescribedby="kategori_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga" class="formcontrol" id="harga" value="{{ $kiosmuls->harga }}" ariadescribedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="qty">quantity</label>
                        <input type="number" name="qty" class="formcontrol" id="qty" value="{{ $kiosmuls->qty }}" ariadescribedby="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection