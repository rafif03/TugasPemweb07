<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar Jenis Pelanggan</h2>
    <a href="<?php echo e(route('jenis.create')); ?>"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Jenis Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID Jenis Pelanggan</td>
                <td>Tarif per Meter Kubik (Rp)</td>
                <td>Tarif Melebihi Batasan (Rp)</td>
                <td>Batasan (Meter Kubik)</td>
                <td>Manage</td>
            </tr>
        </thead>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/jenis/index.blade.php ENDPATH**/ ?>