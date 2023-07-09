<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Kasir</h2>
    <a href="{{ route('kasir.create') }}"><button type="button" class="btn btn-primary">Tambah Kasir</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Kasir</td>
            <td>Nama</td>
            <td>Email</td>
            <td>No Telp</td>
            <td>No Rek</td>
            <td>Manage</td>
        </tr>
        @foreach($kasirs as $kasir)
        <tr>
            <td>{{ $kasir->IDUser }}</td>
            <td>{{ $kasir->NoKasir }}</td>
            <td>{{ $kasir->Nama }}</td>
            <td>{{ $kasir->Email }}</td>
            <td>{{ $kasir->NoTelp }}</td>
            <td>{{ $kasir->NoRekening }}</td>
            <td>
                <a href="{{ route('kasir.edit', $kasir->NoKasir) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('kasir.destroy', $kasir->NoKasir) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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