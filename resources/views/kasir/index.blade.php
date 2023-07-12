@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Kasir</h2>
    <a href="{{ route('kasir.create') }}"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Kasir</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID User</td>
            <td>No Kasir</td>
            <td>Nama</td>
            <td>Email</td>
            <td>No Telp</td>
            <td>No Rek</td>
            <td>Manage</td>
        </tr>
        @foreach($kasirs as $kasir)
        <tr>
            <td>{{ $kasir->IDUser }}</td>
            <td>{{ $kasir->NoKasir }}</td>
            <td>{{ $kasir->Nama }}</td>
            <td>{{ $kasir->Email }}</td>
            <td>{{ $kasir->NoTelp }}</td>
            <td>{{ $kasir->NoRekening }}</td>
            <td>
                <a href="{{ route('kasir.edit', $kasir->NoKasir) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('kasir.destroy', $kasir->NoKasir) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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