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

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-primary" href="#">
        <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128372617083109397/vecteezy_water-drop-icon-png-transparent_9663352_556.png" width="50" height="50" alt="">
        <strong>SIMPAN</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <span class="navbar-text">
        Sistem Pamsinas Terpadu
        </span>
    </div>
    </nav>

    <nav class="navbar navbar-light bg-light">
        <?php if(Route::has('login')): ?>
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
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
</html><?php /**PATH C:\TugasPemweb07-copy\resources\views/dasboardadmin.blade.php ENDPATH**/ ?>