<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Pelanggan</h2>
    <a href="{{ route('pelanggan.create') }}"><button type="button" class="btn btn-primary">Tambah Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Petugas</td>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Jenis</td>
            <td>No Petugas</td>
            <td>Manage</td>
        </tr>
        @foreach($pelanggans as $pelanggan)
        <tr>
            <td>{{ $pelanggan->IDUser }}</td>
            <td>{{ $pelanggan->NoPelanggan }}</td>
            <td>{{ $pelanggan->Nama }}</td>
            <td>{{ $pelanggan->NoTelp }}</td>
            <td>{{ $pelanggan->Alamat }}</td>
            <td>{{ $pelanggan->Email }}</td>
            <td>{{ $pelanggan->IDJenis }}</td>
            <td>{{ $pelanggan->NoPetugas }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $pelanggan->NoPelanggan) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('pelanggan.destroy', $pelanggan->NoPelanggan) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        @endforeach
    </table>
</body>
</html>