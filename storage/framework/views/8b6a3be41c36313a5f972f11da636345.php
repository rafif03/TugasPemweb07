<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Petugas</h2>
    <a href="<?php echo e(route('petugas.create')); ?>"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Petugas</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>No Petugas</td>
                <td>Nama</td>
                <td>No Telp</td>
                <td>Area</td>
                <td>Manage</td>
            </tr>
        </thead>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/petugas/index.blade.php ENDPATH**/ ?>