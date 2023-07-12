<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Tagihan</h2>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
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
                <td>Bukti Bayar</td>
                <td>Tanggal Bayar</td>
                <td>No Petugas</td>
                <td>No Kasir</td>
                <td>Manage</td>
            </tr>
        </thead>
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
            <td><img src="<?php echo e(asset('storage/'.$tagihan->BuktiBayar)); ?>" height="100px" width="100px"></td>
            <td><?php echo e($tagihan->TglBayar); ?></td>
            <td><?php echo e($tagihan->NoPetugas); ?></td>
            <td><?php echo e($tagihan->NoKasir); ?></td>
            <td>
                <a href="<?php echo e(route('pelunasan.edit', $tagihan->IDTagihan)); ?>" type="button" class="btn btn-info" >Edit</a>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/pelunasan/index.blade.php ENDPATH**/ ?>