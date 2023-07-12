<?php $__env->startSection('content'); ?>
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Guest  <?php echo e(Auth::user()->Nama); ?></h4></td></tr>
        <tr>
            <td colspan="2"><h6>Mohon untuk tunggu Admin untuk mengassign role Anda!</h6>
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/dasboardguest.blade.php ENDPATH**/ ?>