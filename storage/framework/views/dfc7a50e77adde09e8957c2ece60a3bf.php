<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<form action=" <?php echo e(route('jenis.update', $jenis->IDJenis)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Jenis ID <?php echo e($jenis->IDJenis); ?></h3></td>
            </tr>
            <tr>
                <td>Tarif per Meter Kubik</td>
                <td><input type="text" name="TarifPerKubik" required>
            </tr>
            <tr>
                <td>Tarif Melebihi Batasan</td>
                <td><input type="text" name="TarifLebihBatasan" required>
            </tr>
            <tr>
                <td>Batasan</td>
                <td><input type="text" name="Batasan" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/jenis/edit.blade.php ENDPATH**/ ?>