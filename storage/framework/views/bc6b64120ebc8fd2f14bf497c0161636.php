<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Kasir</h2>
    <a href="<?php echo e(route('kasir.create')); ?>"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Kasir</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>No Kasir</td>
                <td>Nama</td>
                <td>Email</td>
                <td>No Telp</td>
                <td>No Rek</td>
                <td>Manage</td>
            </tr>
        </thead>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/kasir/index.blade.php ENDPATH**/ ?>