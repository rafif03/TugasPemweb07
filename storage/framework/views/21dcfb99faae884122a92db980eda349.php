<nav class="navbar navbar-light bg-light">
<a class="navbar-brand text-primary" href="#">
    <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128372617083109397/vecteezy_water-drop-icon-png-transparent_9663352_556.png" width="50" height="50" alt="">
    <strong>SIMPAN</strong>
</a>
<div class="navbar" id="navbarText">
    <span class="navbar-text m-2">
    Sistem Pamsinas Terpadu
    </span>
</div>
</nav>

<nav class="navbar navbar-light bg-light">
<h>You're logged in as: <strong><?php echo e(Auth::user()->Nama); ?></strong></h>
<div class="navbar" id="navbarText">
    <span class="navbar-text m-1">
    <form action="<?php echo e(route('logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button class="btn btn-danger">Logout</button>
    </form>
    </span>
</div>
</nav><?php /**PATH C:\TugasPemweb07-copy\resources\views/partials/header.blade.php ENDPATH**/ ?>