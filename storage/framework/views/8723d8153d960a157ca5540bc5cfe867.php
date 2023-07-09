<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Petugas</h2>
    <a href="<?php echo e(route('petugas.create')); ?>"><button type="button" class="btn btn-primary">Tambah Petugas</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Petugas</td>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Area</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $petugass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($petugas->IDUser); ?></td>
            <td><?php echo e($petugas->NoPetugas); ?></td>
            <td><?php echo e($petugas->Nama); ?></td>
            <td><?php echo e($petugas->NoTelp); ?></td>
            <td><?php echo e($petugas->Area); ?></td>
            <td>
                <a href="<?php echo e(route('petugas.edit', $petugas->NoPetugas)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('petugas.destroy', $petugas->NoPetugas)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/petugas/index.blade.php ENDPATH**/ ?>