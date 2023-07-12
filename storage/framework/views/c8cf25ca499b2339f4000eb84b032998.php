<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form action=" <?php echo e(route('tagihan.update', $tagihan->IDTagihan)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Tagihan</h3></td>
            </tr>
            <tr>
                <td>Tanggal Dibuat</td>
                <td><input type="date" name="TglDibuat" required>
            </tr>
            <tr>
                <td>Penggunaan</td>
                <td><input type="text" name="Pengunaan" required>
            </tr>
            <tr>
                <td>Penggunaan Lebih</td>
                <td><input type="text" name="PengunaanLebih" required>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>
                    <select name="Bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <select name="Status">
                    <option value="Belum">Belum Lunas</option>
                </select>
                </td>       
            </tr>
            <tr>
                <td>No Kasir</td>
                <td>
                    <select name="NoKasir">
                        <?php $__currentLoopData = $kasirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kasir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kasir->NoKasir); ?>"><?php echo e($kasir->NoKasir); ?> - <?php echo e($kasir->Nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/tagihan/edit.blade.php ENDPATH**/ ?>