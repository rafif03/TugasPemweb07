@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Pelanggan</h2>
    <a href="{{ route('pelanggan.create') }}"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>No Pelanggan</td>
                <td>Nama</td>
                <td>No Telp</td>
                <td>Alamat</td>
                <td>Email</td>
                <td>Jenis</td>
                <td>No Petugas</td>
                <td>Manage</td>
            </tr>
        </thead>
        @foreach($pelanggans as $pelanggan)
        <tr>
            <td>{{ $pelanggan->IDUser }}</td>
            <td>{{ $pelanggan->NoPelanggan }}</td>
            <td>{{ $pelanggan->Nama }}</td>
            <td>{{ $pelanggan->NoTelp }}</td>
            <td>{{ $pelanggan->Alamat }}</td>
            <td>{{ $pelanggan->Email }}</td>
            <td>{{ $pelanggan->IDJenis }}</td>
            <td>{{ $pelanggan->NoPetugas }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $pelanggan->NoPelanggan) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('pelanggan.destroy', $pelanggan->NoPelanggan) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        <tr>
        @endforeach
    </table>
</div>
@endsection