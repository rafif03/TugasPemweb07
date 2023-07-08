<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action=" {{ route('tagihan.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Tagihan</h3></td>
            </tr>
            <tr>
                <td>No Tagihan</td>
                <td><input type="text" name="id" required>
            </tr>
            <tr>
                <td>No Pelanggan</td>
                <td><input type="text" name="NoPelanggan" required>
            </tr>
            <tr>
                <td>Tanggal Dibuat</td>
                <td><input type="text" name="TglDibuat" required>
            </tr>
            <tr>
                <td>Penggunaan</td>
                <td><input type="text" name="Penggunaan" required>
            </tr>
            <tr>
                <td>Penggunaan Lebih</td>
                <td><input type="text" name="PenggunaanLebih" required>
            </tr>
            <tr>
                <td>Biaya</td>
                <td><input type="text" name="Biaya" required>
            </tr>
            <tr>
                <td>Bulan</td>
                <td><input type="text" name="Bulan" required>
            </tr>
            <tr>
                <td>Status</td>
                <!-- kan boolean awalnya, enaknya apa? -->
                <td><input type="text" name="Status" required>
            </tr>
            <tr>
                <td>Tanggal Bayar</td>
                <td><input type="text" name="TglBayar" required>
            </tr>
            <tr>
                <td>No Kasir</td>
                <td><input type="text" name="NoKasir" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</body>
</html>