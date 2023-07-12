@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <form action=" {{ route('users.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Tambah User Baru</h3></td>
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
                <td colspan="2"><button type="submit" style="float:right">Tambah</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection