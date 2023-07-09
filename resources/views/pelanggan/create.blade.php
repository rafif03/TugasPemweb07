<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action=" {{ route('pelanggan.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Pelanggan</h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td>
                <select name="IDUser">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->Nama }}</option>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" required>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required>
            </tr>
            <tr>
                <td>Jenis Pelanggan</td>
                <td><input type="text" name="IDJenis" required>
            </tr>
            <tr>
                <td>No Petugas</td>
                <td>
                <select name="NoPetugas">
                    @foreach($petugass as $petugas)
                    <option value="{{ $petugas->id }}">{{ $petugas->id }} - {{ $petugas->Nama }}</option>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</body>
</html>