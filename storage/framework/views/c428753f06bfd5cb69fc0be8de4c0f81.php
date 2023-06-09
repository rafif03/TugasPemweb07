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
        navbar-collapse{
            float: right;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128372617083109397/vecteezy_water-drop-icon-png-transparent_9663352_556.png" width="30" height="30" alt="">
    </a>
    <strong>SIMPAN</strong>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        </ul>
        <span class="navbar-text ">
        Navbar text with an inline element
        </span>
    </div>
    </nav>

    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Admin  <?php echo e(Auth::user()->Nama); ?></h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('users.index')); ?>"><button class="btn btn-primary btn-lg ">Manage User</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('petugas.index')); ?>"><button  class="btn btn-primary btn-lg ">Manage Petugas</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('kasir.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Kasir</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('pelanggan.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Pelanggan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('tagihan.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('jenis.index')); ?>"><button style="float: center" class="btn btn-primary btn-lg ">Manage Jenis</button>
            </td>
        </tr>
    </table>

</body>
</html><?php /**PATH C:\Users\rafif\OneDrive\Documents\Kuliah\Semester 4\TugasPemweb07\resources\views/dasboardadmin.blade.php ENDPATH**/ ?>