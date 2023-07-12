@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Jenis Pelanggan</h2>
    <a href="{{ route('jenis.create') }}"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Jenis Pelanggan</button></a>
    <table class="table table-info table-hover table-striped">
        <tr>
            <td>ID Jenis Pelanggan</td>
            <td>Tarif per Meter Kubik (Rp)</td>
            <td>Tarif Melebihi Batasan (Rp)</td>
            <td>Batasan (Meter Kubik)</td>
            <td>Manage</td>
        </tr>
        @foreach($jeniss as $jenis)
        <tr>
            <td>{{ $jenis->IDJenis }}</td>
            <td>{{ $jenis->TarifPerKubik }}</td>
            <td>{{ $jenis->TarifLebihBatasan }}</td>
            <td>{{ $jenis->Batasan }}</td>
            <td>
                <a href="{{ route('jenis.edit', $jenis->IDJenis) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('jenis.destroy', $jenis->IDJenis) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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