<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action=" <?php echo e(route('pelanggan.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Pelanggan</h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td>
                <select name="IDUser">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->id); ?> - <?php echo e($user->Nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" required>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required>
            </tr>
            <tr>
                <td>Jenis Pelanggan</td>
                <td><input type="text" name="IDJenis" required>
            </tr>
            <tr>
                <td>No Petugas</td>
                <td>
                <select name="NoPetugas">
                    <?php $__currentLoopData = $petugass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($petugas->NoPetugas); ?>"><?php echo e($petugas->NoPetugas); ?> - <?php echo e($petugas->Nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>