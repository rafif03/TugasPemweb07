<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action=" {{ route('tagihansaya.update', $tagihan->IDTagihan) }}" method="post">
    @csrf
    @method('PUT')
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Tagihan</h3></td>
            </tr>
            <tr>
                <td>Tanggal Dibuat</td>
                <td>{{ $tagihan->TglDibuat }}</td>
            </tr>
            <tr>
                <td>Penggunaan</td>
                <td>{{ $tagihan->Pengunaan }}</td>
            </tr>
            <tr>
                <td>Penggunaan Lebih</td>
                <td>{{ $tagihan->PengunaanLebih}}</td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>{{ $tagihan->Bulan }}</td>
            </tr>
            <tr>
                <td>Biaya</td>
                <td>{{ $tagihan->Biaya }}</td>
            </tr>
            <tr>
                <td>Bukti Bayar</td>
                <td><input type="file" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Bayar</td>
                <td><input type="date" name="TglBayar">
            </tr>
            <tr>
                <td>No Kasir</td>
                <td>{{ $tagihan->NoKasir }}</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</body>
</html>