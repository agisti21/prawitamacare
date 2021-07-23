@extends('layout.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit donasi</h2>
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
  <br>
    <form action="{{ route('donasiupdate',$donasi->id) }}" method="POST">
        @csrf
   
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Kode Unik</strong>
                    <input type="text" name="kode_unik" value="{{ $donasi->kode_unik }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nama Donatur</strong>
                    <input type="text" name="nama_donatur" value="{{ $donasi->nama_donatur }}" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Jenis</strong>
                    <select name="jenis" id="jenis" value="{{ $donasi->jenis }}" class="form-control">
                    @if($donasi->jenis)
                        <option value="{{ $donasi->jenis }}" selected>{{ $donasi->jenis}}</option>
                        @endif
                        <option value="Wakaf">Wakaf</option>
                        <option value="Infaq/Shodakoh">Infaq/Shodakoh</option>
                        <option value="Hibah">Hibah</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nominal</strong>
                    <input type="number" name="nominal" value="{{ $donasi->nominal}}" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Kategori</strong>
                    <select name="kategori" id="kategori" value="{{ $donasi->kategori }}"class="form-control" >
                    @if($donasi->kategori)
                        <option value="{{ $donasi->kategori }}" selected>{{ $donasi->kategori}}</option>
                        @endif
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
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
    </form>
@endsection