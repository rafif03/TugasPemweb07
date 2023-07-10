<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Tagihan</h2>
    <a href="{{ route('tagihan.create') }}"><button type="button" class="btn btn-primary">Tambah Tagihan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID Tagihan</td>
            <td>No Pelanggan</td>
            <td>Nama</td>
            <td>Tanggal</td>/
            <td>Penggunaan</td>
            <td>Penggunaan Lebih</td>
            <td>Biaya</td>
            <td>Bulan</td>
            <td>Status</td>
            <td>Tanggal Bayar</td>
            <td>No Petugas</td>
            <td>No Kasir</td>
        </tr>
        @foreach($tagihans as $tagihan)
        <tr>
            <td>{{ $tagihan->IDTagihan }}</td>
            <td>{{ $tagihan->NoPelanggan }}</td>
            <td>{{ $tagihan->Nama }}</td>
            <td>{{ $tagihan->TglDibuat }}</td>
            <td>{{ $tagihan->Pengunaan }}</td>
            <td>{{ $tagihan->PengunaanLebih }}</td>
            <td>{{ $tagihan->Biaya }}</td>
            <td>{{ $tagihan->Bulan }}</td>
            <td>{{ $tagihan->Status }}</td>
            <td>{{ $tagihan->TglBayar }}</td>
            <td>{{ $tagihan->NoPetugas}}</td>
            <td>{{ $tagihan->NoKasir }}</td>
        <tr>
        @endforeach
    </table>
</body>
</html>