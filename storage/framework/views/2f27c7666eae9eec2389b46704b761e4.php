<?php $__env->startSection('content'); ?>
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Admin  <?php echo e(Auth::user()->Nama); ?></h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('users.index')); ?>"><button class="btn btn-primary btn-lg ">Manage User</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('petugas.index')); ?>"><button  class="btn btn-primary btn-lg ">Manage Petugas</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('kasir.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Kasir</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('pelanggan.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Pelanggan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('tagihan.index')); ?>"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="<?php echo e(route('jenis.index')); ?>"><button style="float: center" class="btn btn-primary btn-lg ">Manage Jenis</button>
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/dasboardadmin.blade.php ENDPATH**/ ?>