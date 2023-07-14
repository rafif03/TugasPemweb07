<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form action=" <?php echo e(route('pelunasan.update', $tagihan->IDTagihan)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Tagihan</h3></td>
            </tr>
            <tr>
                <td>Tanggal Dibuat</td>
                <td><?php echo e($tagihan->TglDibuat); ?></td>
            </tr>
            <tr>
                <td>Penggunaan</td>
                <td><?php echo e($tagihan->Pengunaan); ?></td>
            </tr>
            <tr>
                <td>Penggunaan Lebih</td>
                <td><?php echo e($tagihan->PengunaanLebih); ?></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td><?php echo e($tagihan->Bulan); ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <select name="Status">
                    <option value="Lunas">Lunas</option>
                    <option value="Belum">Belum Lunas</option>
                </select>
                </td>       
            </tr>
            <tr>
                <td>Bukti Bayar</td>
                <td><img src="<?php echo e(asset('storage/'.$tagihan->BuktiBayar)); ?>" height="100px" width="100px"></td>
            </tr>
            <tr>
                <td>Tanggal Bayar</td>
                <td><?php echo e($tagihan->TglBayar); ?></td>
            </tr>
            <tr>
                <td>No Kasir</td>
                <td><?php echo e($tagihan->NoKasir); ?></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/pelunasan/edit.blade.php ENDPATH**/ ?>