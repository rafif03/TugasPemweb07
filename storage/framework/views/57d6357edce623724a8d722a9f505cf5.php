<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Pelanggan</h2>
    <a href="<?php echo e(route('pelanggan.create')); ?>"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>No Pelanggan</td>
                <td>Nama</td>
                <td>No Telp</td>
                <td>Alamat</td>
                <td>Email</td>
                <td>Jenis</td>
                <td>No Petugas</td>
                <td>Manage</td>
            </tr>
        </thead>
        <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pelanggan->IDUser); ?></td>
            <td><?php echo e($pelanggan->NoPelanggan); ?></td>
            <td><?php echo e($pelanggan->Nama); ?></td>
            <td><?php echo e($pelanggan->NoTelp); ?></td>
            <td><?php echo e($pelanggan->Alamat); ?></td>
            <td><?php echo e($pelanggan->Email); ?></td>
            <td><?php echo e($pelanggan->IDJenis); ?></td>
            <td><?php echo e($pelanggan->NoPetugas); ?></td>
            <td>
                <a href="<?php echo e(route('pelanggan.edit', $pelanggan->NoPelanggan)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('pelanggan.destroy', $pelanggan->NoPelanggan)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>