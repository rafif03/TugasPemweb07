<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action=" <?php echo e(route('kasir.update', $kasir->NoKasir)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Kasir</h3></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>No Rekening</td>
                <td><input type="text" name="NoRekening" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/kasir/edit.blade.php ENDPATH**/ ?>