@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('pelanggan.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Pelanggan</h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td>
                <select name="IDUser">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->Nama }}</option>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" required>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required>
            </tr>
            <tr>
                <td>Jenis Pelanggan</td>
                <td><input type="text" name="IDJenis" required>
            </tr>
            <tr>
                <td>No Petugas</td>
                <td>
                <select name="NoPetugas">
                    @foreach($petugass as $petugas)
                    <option value="{{ $petugas->NoPetugas }}">{{ $petugas->NoPetugas }} - {{ $petugas->Nama }}</option>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</div>
@endsection