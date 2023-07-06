<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table{
            display:block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            width:50%;
        }

    </style>
</head>
<body>
    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
        <table class="table table-striped d-flex justify-content-center">
            <tr><td colspan="2"><h4>Login</h4></td></tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required></input></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="text" name="Password" required></input></td>
            </tr>
            <tr>
                <td>Don't Have Account?</td>
                <td>
                <a href=""><button type="button" style="float: right" class="btn btn-sm btn-outline-primary btn-lg ">Register</button></a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" style="float: right" class="btn btn-primary btn-lg ">Login</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3 id="Hasil"></h3>
                </td>
            </tr>
        </table>
    </form>
</body>
</html><?php /**PATH E:\xampp\htdocs\TugasPemweb07\resources\views/login.blade.php ENDPATH**/ ?>