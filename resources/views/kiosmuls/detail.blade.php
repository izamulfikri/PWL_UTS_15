@extends('kiosmuls.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Barang Kios
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Barang: </b>{{$kiosmuls->nama_barang}}</li>
                    <li class="list-group-item"><b>Kategori: </b>{{$kiosmuls->kategori_barang}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$kiosmuls->harga}}</li>
                    <li class="list-groupitem"><b>Quantity : </b>{{$kiosmuls->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('kiosmuls.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection