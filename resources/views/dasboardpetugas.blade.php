<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table{
            display:block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            width:50%;
        }
        button {
            width: 100%;
        }
    </style>
</head>
<body>
<table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Petugas {{ Auth::user()->Nama }}</h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('tagihan.index') }}"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
    </table>
    </body>
    </html>