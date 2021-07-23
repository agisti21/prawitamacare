@extends('layout.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('donasi') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('donasisave') }}" method="POST">
    @csrf
  
    <div class="row">

        <div class="col-md-6">
        <div class="form-group">
            <strong >Kode Unik</strong>
            <input id="kode_unik" type="text" name="kode_unik" class="form-control" >
            <!-- value ="{{ $kode_unik }}" readonly -->
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            <strong >Nama Donatur</strong>
            <input id="nama_donatur" type="text" name="nama_donatur" class="form-control">
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            <strong >Jenis</strong>
                <select name="jenis" id="jenis" class="form-control">
                    <option value="Wakaf">Wakaf</option>
                    <option value="Infaq/Shodakoh">Infaq/Shodakoh</option>
                    <option value="Hibah">Hibah</option>
                </select>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            <strong >Nominal</strong>
            <input id="nominal" type="number" name="nominal" class="form-control">
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            <strong >kategori</strong>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="AL">Alumni</option>
                    <option value="BU">Badan usaha (perusahaan, yayasan, dll)</option>
                    <option value="DO">Donatur khusus / perorangan</option>
                    <option value="GS">Guru/Staf Yayasan Prawitama</option>
                    <option value="KM">Komunitas</option>
                    <option value="OT">Orang Tua Siswa</option>
                    <option value="OR">Organisasi</option>
                    <option value="PD">Peserta Didik</option>
                </select>
        </div>
        </div>
    </div>

    <div class="text-right" >
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a class="btn btn-primary" href="{{ route('donasi') }}"> Back</a>

    </div>
   
</form>
@endsection