<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Tagihan</h2>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>No Tagihan</td>
            <td>No Pelanggan</td>
            <td>Tanggal</td>
            <td>Penggunaan</td>
            <td>Penggunaan Lebih</td>
            <td>Biaya</td>
            <td>Bulan</td>
            <td>Status</td>
            <td>Tanggal Bayar</td>
            <td>Kasir</td>
            <td>Manage</td>
        </tr>
        @foreach($tagihan as $tagihan)
        <tr>
            <td>{{ $tagihan->id }}</td>
            <td>{{ $tagihan->NoPelanggan }}</td>
            <td>{{ $tagihan->TglDibuat }}</td>
            <td>{{ $tagihan->Penggunaan }}</td>
            <td>{{ $tagihan->PenggunaanLebih }}</td>
            <td>{{ $tagihan->Biaya }}</td>
            <td>{{ $tagihan->Bulan }}</td>
            <td>{{ $tagihan->Status }}</td>
            <td>{{ $tagihan->TglBayar }}</td>
            <td>{{ $tagihan->NoKasir }}</td>
            <td>
                <a href="{{ route('kasir.edit', $tagihan->id) }}" type="button" class="btn btn-info" >Edit</a>
            </td>
        <tr>
        @endforeach
    </table>
</body>
</html>