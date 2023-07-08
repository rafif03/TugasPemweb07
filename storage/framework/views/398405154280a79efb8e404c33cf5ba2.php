<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar User</h2>
    <a href="<?php echo e(route('users.create')); ?>"><button type="button" class="btn btn-primary">Tambah User</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>Username</td>
            <td>Name</td>
            <td>Pass</td>
            <td>Role</td>
            <td>Manage</td>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->Username); ?></td>
            <td><?php echo e($user->Nama); ?></td>
            <td><?php echo e($user->Password); ?></td>
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
</body>
</html><?php /**PATH C:\Users\rafif\OneDrive\Documents\Kuliah\Semester 4\TugasPemweb07\resources\views/users/index.blade.php ENDPATH**/ ?>