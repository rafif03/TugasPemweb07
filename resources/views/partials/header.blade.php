<nav class="navbar navbar-light">
<a class="navbar-brand text-primary">
    <img src="https://cdn.discordapp.com/attachments/1029291906603163751/1128786472464551956/simpan.png" width="200" alt="logo">
</a>
<div class="navbar" id="navbarText">
    <span class="navbar-text m-2">
    Sistem Pamsinas Terpadu
    </span>
</div>
</nav>

<nav class="navbar navbar-light">
<h>You're logged in as: <strong>{{ Auth::user()->Nama }}</strong></h>
<div class="navbar" id="navbarText">
    <span class="navbar-text m-1">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
    </span>
</div>
</nav>