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
        body{
            background-attachment: fixed;
            background-image: url(https://img.freepik.com/premium-photo/watercolor-light-gray-gradient-background-texture_145343-639.jpg?w=2000);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
    <a class="navbar-brand text-primary">
        <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128786472464551956/simpan.png" width="200" alt="logo">
    </a>
    <div class="navbar" id="navbarText">
        <span class="navbar-text m-2">
        Sistem Pamsinas Terpadu
        </span>
    </div>
    </nav>
    <form method="POST" action="{{ route('ceklogin') }}">
    @csrf
        <table class="table table-striped d-flex justify-content-center">
            <tr><td colspan="2"><h4>Login</h4></td></tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required></input></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="password" name="password" required></input></td>
            </tr>
            <tr>
                <td>Don't Have Account?</td>
                <td>
                <a href="{{ route('register') }}"><button type="button" style="float: right" class="btn btn-sm btn-outline-primary btn-lg ">Register</button></a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" style="float: right" class="btn btn-primary btn-lg ">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>