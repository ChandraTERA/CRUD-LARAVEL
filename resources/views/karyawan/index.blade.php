@extends('layout.app')
@section('tittle', 'karyawan')
@section('content')

<!-- Page Heading -->

<style>
    #data-table {
        margin-top: 15px;
        color: black
    }
    
    #print {
        margin-right: 20px;
    }
    
    #btn_add {
        margin-left: 20px;
        margin-top: 30px;
    }
    
    #btn_plus {
        color: yellow;
    }

    tr, td {
        color: #5c5c5c; 
    }

    th {
        color: whitesmoke;
    }
    
    td {
        text-align: center; 
        color:rgb(62, 60, 60)
    }
    
    td:hover {
        color: red
    }

    .display-heading {
        font-size: 3.5rem;
    }

    .table-heading {
        text-align: center;
    }


</style>



<!-- DataTales Example -->
<div class="card shadow mb-4" id="data-table">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center display-heading">KATALOG BARANG</h6>
    </div>
    <div id="btn_add">
        <h1 class="btn btn-primary"  style="letter-spacing:2px;">
            <a href="{{ url('karyawan/add') }}" style="color: white; text-decoration: none;">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah 
            </a>
        </h1>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            {{-- <table class="table align-middle cell-border table-hover bg-light bg-gradient" id="dataTable" width="100%" cellspacing="0">     --}}
                <table class="table align-middle cell-border table-hover" width="100%" cellspacing="0">
                    <table class="align-midle table table-bordered cell-border table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-dark"> 
                                <tr>
                                    <th>No</th>
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Berat Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Kondisi Produk</th>
                                    <th>Keterangan Produk</th>
                                    <th>Terbaru</th>
                                    <th>Perbaharui</th>
                                    <th>Aksi</th>
                                </tr>        
                            </thead>
                        <tbody>
                    <?php $no = 1; ?>
                    @foreach ($karyawan as $row)
                        <tr class="table-row">
                            <td>{{ $no++}}</td>
                            <td>{{$row-> id }}</td>
                            <td>{{$row-> nama_produk }}</td>
                            <td>{{$row-> berat }}</td>
                            <td>{{$row-> harga }}</td>
                            <td>{{$row-> kondisi }}</td>
                            <td>{{$row-> keterangan }}</td>
                            <td>{{$row-> created_at }}</td>
                            <td>{{$row-> update_at }}</td>
                            <td>    
                                <center>
                                    <a href="{{ url ('karyawan/update', $row->id) }}" type="button" class="btn btn-info btn-sm mt-2">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ url('karyawan/delete', $row->id) }}" type="button" class="btn btn-danger btn-sm mt-2" onClick="return confirm('Apa anda yakin hapus data tersebut ???')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ route('karyawan/delete') }} --}}
        </div>
    </div>
</div>
@endsection