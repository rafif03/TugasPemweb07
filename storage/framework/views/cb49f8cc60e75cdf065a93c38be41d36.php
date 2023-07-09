<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Jenis Pelanggan</h2>
    <a href="<?php echo e(route('jenis.create')); ?>"><button type="button" class="btn btn-primary">Tambah Jenis Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID Jenis Pelanggan</td>
            <td>Tarif per Meter Kubik (Rp)</td>
            <td>Tarif Melebihi Batasan (Rp)</td>
            <td>Batasan (Meter Kubik)</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $jeniss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($jenis->IDJenis); ?></td>
            <td><?php echo e($jenis->TarifPerKubik); ?></td>
            <td><?php echo e($jenis->TarifLebihBatasan); ?></td>
            <td><?php echo e($jenis->Batasan); ?></td>
            <td>
                <a href="<?php echo e(route('jenis.edit', $jenis->IDJenis)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('jenis.destroy', $jenis->IDJenis)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/jenis/index.blade.php ENDPATH**/ ?>