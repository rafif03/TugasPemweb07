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
            margin-top: 5%;
            width:50%;
        }
        button{
            width: 100%;
        }
    </style>
</head>

<body style="background-color:#f0efed;">

    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand text-primary" href="#">
        <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128372617083109397/vecteezy_water-drop-icon-png-transparent_9663352_556.png" width="50" height="50" alt="">
        <strong>SIMPAN</strong>
    </a>
    <div class="navbar" id="navbarText">
        <span class="navbar-text m-2">
        Sistem Pamsinas Terpadu
        </span>
    </div>
    </nav>

    <nav class="navbar navbar-light bg-light">
    <h>You're logged in as: <strong>{{ Auth::user()->Nama }}</strong></h>
    <div class="navbar" id="navbarText">
        <span class="navbar-text m-1">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
        </span>
    </div>
    </nav>


    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Admin  {{ Auth::user()->Nama }}</h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('users.index') }}"><button class="btn btn-primary btn-lg ">Manage User</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('petugas.index') }}"><button  class="btn btn-primary btn-lg ">Manage Petugas</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('kasir.index') }}"><button class="btn btn-primary btn-lg ">Manage Kasir</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('pelanggan.index') }}"><button class="btn btn-primary btn-lg ">Manage Pelanggan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('tagihan.index') }}"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('jenis.index') }}"><button style="float: center" class="btn btn-primary btn-lg ">Manage Jenis</button>
            </td>
        </tr>
    </table>

</body>
</html>