<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donasi SMK Wikrama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
</head>
<body>
    <center>
        <h3 class="h3">Donasi SMK Wikrama</h3>
    </center>
    <h6 align="right">@php $tgl=date('d-m-Y'); @endphp
            Bogor, {{$tgl}} 
        </h6>
    <br>
    <table cellspacing="0" cellpadding="4">
        <tr>
            <th width="1%">Kode Unik</th>
            <td align="right">:</td>
            <td>{{ $donasi->kode_unik }}</td>
        </tr>
        <tr>
            <th width="1%">Nama Donatur</th>
            <td align="right">:</td>
            <td>{{ $donasi->nama_donatur }}</td>
        </tr>
        <tr>
            <th width="1%">Jenis </th>
            <td align="right">:</td>
            <td>{{ $donasi->jenis}}</td>
        </tr>   
        <tr>
            <th width="1%">Nominal</th>
            <td align="right">:</td>
            <td>{{ $donasi->nominal }}</td>
        </tr>
        <tr>
            <th width="1%">Kategori</th>
            <td align="right">:</td>
            <td>{{ $donasi->kategori }}</td>
        </tr>
    </table>
    <br>
    <br>
       
</body>
</html>