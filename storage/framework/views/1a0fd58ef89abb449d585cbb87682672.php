<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Pelanggan</h2>
    <a href="<?php echo e(route('pelanggan.create')); ?>"><button type="button" class="btn btn-primary">Tambah Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Pelanggan</td>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Jenis</td>
            <td>No Petugas</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pelanggan->IDUser); ?></td>
            <td><?php echo e($pelanggan->NoPelanggan); ?></td>
            <td><?php echo e($pelanggan->Nama); ?></td>
            <td><?php echo e($pelanggan->NoTelp); ?></td>
            <td><?php echo e($pelanggan->Alamat); ?></td>
            <td><?php echo e($pelanggan->Email); ?></td>
            <td><?php echo e($pelanggan->IDJenis); ?></td>
            <td><?php echo e($pelanggan->NoPetugas); ?></td>
            <td>
                <a href="<?php echo e(route('pelanggan.edit', $pelanggan->NoPelanggan)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('pelanggan.destroy', $pelanggan->NoPelanggan)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>