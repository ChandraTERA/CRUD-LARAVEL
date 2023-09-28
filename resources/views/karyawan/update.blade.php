@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Karyawan</h1>
    <form method="POST" action="{{ url ('karyawan/update', $row->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">ID Prodok</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $karyawan->id }}">
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $karyawan->nama_produk }}">
        </div>
        <div>
            <label for="berat">Berat</label>
            <input class="form-control" type="text" id="berat" placeholder="Berat" name="berat" value="{{ $karyawan->berat }}">
        </div>
        <div>
            <label for="harga">Harga</label>
            <input class="form-control" type="text" id="harga" placeholder="Harga" name="harga" value="{{ $karyawan->harga }}">
        </div>
        <div>
            <label for="keterangan">Keterangan</label>
            <input class="form-control" type="textarea" " id="keterangan" placeholder="Keterangan" name="keterangan" value="{{ $karyawan->keterangan }}">
       </div>
       <div class="d-grid gap-2 max-auto">
            <button type="submit" class="btn btn-info btn-sm mt-2"><i class="fa-solid fa-floppy-disk"></i>Simpan Perubahan</button>    
      </div>
    </form>
</div>
@endsection
