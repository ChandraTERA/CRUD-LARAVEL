<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
      <title>Tambah Data</title>
      <style>
                        * {
                  box-sizing: border-box;
            }
            #tambah_data{
                  margin-left: 10px;
                  text-align: center;
                  
            }

            #btn {
                  width: 33.5em;
                  margin-top: 10px;
                  padding: 10px;
            }

           
           
      </style>
</head>
<body>
      
@extends('layout.app')
@section('tittle', 'Tambah data')
@section('content')


@if (session('message'))
<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <button type="submit" class="btn btn-primary btn-sm" id="btn"><i class="fas fa-save" style="letter-spacing:5px;" ="true"></i> Simpan</button>
</symbol>

@endif
<div class="container-fluid">
      <div class="row" id="ditengah">
            <div class="col-6">
                  <div class="card shadow mb-4 mt-3">
                        <div class="card-header py-3">
                              <h1 class="h3 mb-0 text-gray-800" id="tambah_data">Tambah data</h1>
                        <h6 class="m-0 font-weight-bold text-primary">Form Input Data</h6>
                  </div>
                  <div class="card-body">
                        <form action="{{ url('karyawan/insert/save') }}" method="POST" class="form">
                              @csrf
                              
                              <div class="form-group">
                                    <label for="id">ID Produk
                                          <input class="form-control" type="text" name="id" id="id" placeholder="20231...">
                                    </label>
                              </div>
                              <div class="form-group">
                                  <label for="nama_produk">Nama Produk
                                        <input class="form-control" type="text" name="nama_produk" id="nama_produk" placeholder="Masukan nama">
                                  </label>
                              </div>
                              <div class="form-group">
                                  <label for="berat">Berat Produk
                                        <input class="form-control" type="text" name="berat" id="berat" placeholder="Berat">
                                  </label>
                              </div>
                              <div class="form-group">
                                  <label for="harga">Harga Produk
                                        <input class="form-control" type="text" name="harga" id="harga" placeholder="Harga">
                                  </label>
                              </div>

                              <div class="mb-3">
                                    <label for="kondisi" class="form-label">Kondisi Produk</label>
                                    <select class="form-select" id="kondisi" name="kondisi">
                                          <option value="baru">Baru</option>
                                          <option value="bekas">Bekas</option>
                                    </select>
                              </div>

                              <div class="form-group">
                                  <label for="keterangan">Keterangan Produk
                                        <input class="form-control" type="textarea" name="keterangan" id="keterangan" placeholder="Keterangan">
                                  </label>
                              </div>
                              <div class="d-grid gap-2 max-auto">
                                  <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i>&ensp;Simpan</button>
                              </div>
                        </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>
@endsection

</body>
</html>

