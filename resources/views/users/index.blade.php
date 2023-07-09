<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar User</h2>
    <a href="{{ route('users.create') }}"><button type="button" class="btn btn-primary">Tambah User</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>Username</td>
            <td>Name</td>
            <td>Pass</td>
            <td>Role</td>
            <td>Manage</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->Username }}</td>
            <td>{{ $user->Nama }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->IDRole }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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