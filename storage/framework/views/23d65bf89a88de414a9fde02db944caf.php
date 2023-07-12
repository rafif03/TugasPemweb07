<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2>Daftar User</h2>
    <a href="<?php echo e(route('users.create')); ?>" style><button style="width: 150px;" type="button" class="btn btn-primary">Tambah User</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>Username</td>
                <td>Name</td>
                <td>Pass</td>
                <td>Role</td>
                <td>Manage</td>
            </tr>
        </thead>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->Username); ?></td>
            <td><?php echo e($user->Nama); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->IDRole); ?></td>
            <td>
                <a href="<?php echo e(route('users.edit', $user->id)); ?>" type="button" class="btn btn-info" >Edit</a>
                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" type="button" method="post" onsubmit="return confirm('Yakin?')">
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/users/index.blade.php ENDPATH**/ ?>