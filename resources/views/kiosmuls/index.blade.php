@extends('kiosmuls.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('kiosmuls.create') }}"> Input Data Kios</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th>Quantity</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($kiosmuls as $kiosmul)
    <tr>
        <td>{{ $kiosmul->nama_barang }}</td>
        <td>{{ $kiosmul->kategori_barang }}</td>
        <td>{{ $kiosmul->harga }}</td>
        <td>{{ $kiosmul->qty }}</td>
        <td>
                <a class="btn btn-info" href="{{ route('kiosmuls.show',$kiosmul->kode_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('kiosmuls.edit',$kiosmul->kode_barang) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection