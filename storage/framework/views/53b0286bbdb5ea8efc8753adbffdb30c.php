<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Kasir</h2>
    <a href="<?php echo e(route('kasir.create')); ?>"><button type="button" class="btn btn-primary">Tambah Kasir</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Kasir</td>
            <td>Nama</td>
            <td>Email</td>
            <td>No Telp</td>
            <td>No Rek</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $kasirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kasir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($kasir->IDUser); ?></td>
            <td><?php echo e($kasir->NoKasir); ?></td>
            <td><?php echo e($kasir->Nama); ?></td>
            <td><?php echo e($kasir->Email); ?></td>
            <td><?php echo e($kasir->NoTelp); ?></td>
            <td><?php echo e($kasir->NoRekening); ?></td>
            <td>
                <a href="<?php echo e(route('kasir.edit', $kasir->NoKasir)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('kasir.destroy', $kasir->NoKasir)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\Users\rafif\OneDrive\Documents\Kuliah\Semester 4\TugasPemweb07\resources\views/kasir/index.blade.php ENDPATH**/ ?>