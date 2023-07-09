<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Petugas</h2>
    <a href="{{ route('petugas.create') }}"><button type="button" class="btn btn-primary">Tambah Petugas</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Petugas</td>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Area</td>
            <td>Manage</td>
        </tr>
        @foreach($petugass as $petugas)
        <tr>
            <td>{{ $petugas->IDUser }}</td>
            <td>{{ $petugas->NoPetugas }}</td>
            <td>{{ $petugas->Nama }}</td>
            <td>{{ $petugas->NoTelp }}</td>
            <td>{{ $petugas->Area }}</td>
            <td>
                <a href="{{ route('petugas.edit', $petugas->NoPetugas) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('petugas.destroy', $petugas->NoPetugas) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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