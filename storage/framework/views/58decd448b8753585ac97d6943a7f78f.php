<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Tagihan</h2>
    <a href="<?php echo e(route('tagihan.create')); ?>"><button type="button" style="width: 150px;" class="btn btn-primary">Tambah Tagihan</button></a>
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
            <td>
                <a href="<?php echo e(route('tagihan.edit', $tagihan->IDTagihan)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('tagihan.destroy', $tagihan->IDTagihan)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/tagihan/index.blade.php ENDPATH**/ ?>