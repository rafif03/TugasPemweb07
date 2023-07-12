@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Petugas</h2>
    <a href="{{ route('petugas.create') }}"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Petugas</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Petugas</td>
            <td>Nama</td>
            <td>No Telp</td>
            <td>Area</td>
            <td>Manage</td>
        </tr>
        @foreach($petugass as $petugas)
        <tr>
            <td>{{ $petugas->IDUser }}</td>
            <td>{{ $petugas->NoPetugas }}</td>
            <td>{{ $petugas->Nama }}</td>
            <td>{{ $petugas->NoTelp }}</td>
            <td>{{ $petugas->Area }}</td>
            <td>
                <a href="{{ route('petugas.edit', $petugas->NoPetugas) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('petugas.destroy', $petugas->NoPetugas) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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