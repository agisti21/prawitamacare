@extends('layout.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Donasi</h2>
                <br>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('donasicreate') }}">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <br>
   <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Unik</th>
                <th>Nama Donatur</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donasis as $donasi)
            <tr> 
            <td>{{ $loop->iteration }}</td>
            <td>{{ $donasi -> kode_unik}}</td>
            <td>{{ $donasi->nama_donatur}}</td>
            <td>{{ $donasi->jenis}}</td>
            <td>{{ $donasi->nominal}}</td>
            <td>{{ $donasi->kategori}}</td>
            <td>
                    <a href="{{route('donasi.cetak', $donasi->id)}}" class="btn btn-warning">Print</a>                

                    <a class="btn btn-primary" href="{{ route('donasiedit',$donasi->id) }}">Edit</a>

                    <a href="{{route('donasihapus', $donasi->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger">Delete</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: ['excel', 'pdf']
    });
} );
</script>   
@endsection