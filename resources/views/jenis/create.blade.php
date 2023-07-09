<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action=" {{ route('jenis.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Jenis Pelanggan</h3></td>
            </tr>
            <tr>
                <td>Tarif per Meter Kubik</td>
                <td><input type="text" name="TarifPerKubik" required>
            </tr>
            <tr>
                <td>Tarif Melebihi Batasan</td>
                <td><input type="text" name="TarifLebihBatasan" required>
            </tr>
            <tr>
                <td>Batasan</td>
                <td><input type="text" name="Batasan" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</body>
</html>