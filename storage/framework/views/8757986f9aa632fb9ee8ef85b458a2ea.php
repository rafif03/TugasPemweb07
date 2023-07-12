<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form action=" <?php echo e(route('users.update', $users->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit User ID <?php echo e($users->id); ?></h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td><input type="text" name="id" value="<?php echo e($users->id); ?>" disabled>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" required>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="Nama" required>
            </tr>
            <tr>
                <td>ID Role</td>
                <td><select name="IDRole">
                    <option value="1">Admin</option>
                    <option value="5">Guest</option>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TugasPemweb07-copy\resources\views/users/edit.blade.php ENDPATH**/ ?>