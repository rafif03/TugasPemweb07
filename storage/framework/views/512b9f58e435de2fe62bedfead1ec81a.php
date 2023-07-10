<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Tagihan</h2>
    <a href="<?php echo e(route('tagihan.create')); ?>"><button type="button" class="btn btn-primary">Tambah Tagihan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID Tagihan</td>
            <td>No Pelanggan</td>
            <td>Nama</td>
            <td>Tanggal</td>/
            <td>Penggunaan</td>
            <td>Penggunaan Lebih</td>
            <td>Biaya</td>
            <td>Bulan</td>
            <td>Status</td>
            <td>Tanggal Bayar</td>
            <td>No Petugas</td>
            <td>No Kasir</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $tagihans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagihan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($tagihan->IDTagihan); ?></td>
            <td><?php echo e($tagihan->NoPelanggan); ?></td>
            <td><?php echo e($tagihan->Nama); ?></td>
            <td><?php echo e($tagihan->TglDibuat); ?></td>
            <td><?php echo e($tagihan->Pengunaan); ?></td>
            <td><?php echo e($tagihan->PengunaanLebih); ?></td>
            <td><?php echo e($tagihan->Biaya); ?></td>
            <td><?php echo e($tagihan->Bulan); ?></td>
            <td><?php echo e($tagihan->Status); ?></td>
            <td><?php echo e($tagihan->TglBayar); ?></td>
            <td><?php echo e($tagihan->NoPetugas); ?></td>
            <td><?php echo e($tagihan->NoKasir); ?></td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/tagihansaya/index.blade.php ENDPATH**/ ?>