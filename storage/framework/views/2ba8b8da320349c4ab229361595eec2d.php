<?php $__env->startSection('content'); ?>
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Petugas <?php echo e(Auth::user()->Nama); ?></h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('tagihan.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/dasboardpetugas.blade.php ENDPATH**/ ?>