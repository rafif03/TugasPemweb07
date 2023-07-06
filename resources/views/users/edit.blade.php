<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action=" {{ route('users.update', $users->id) }}" method="post">
    @csrf
    @method('PUT')
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Tambah User Baru</h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td><input type="text" name="id" value="{{ $users->id }}" disabled>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="Password" required>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="Nama" required>
            </tr>
            <tr>
                <td>ID Role</td>
                <td><input type="text" name="IDRole" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</body>
</html>