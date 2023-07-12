@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Tagihan</h2>
    <a href="{{ route('tagihan.create') }}"><button type="button" style="width: 150px;" class="btn btn-primary">Tambah Tagihan</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID Tagihan</td>
                <td>No Pelanggan</td>
                <td>Nama</td>
                <td>Tanggal</td>/
                <td>Penggunaan</td>
                <td>Penggunaan Lebih</td>
                <td>Biaya</td>
                <td>Bulan</td>
                <td>Status</td>
                <td>Bukti Bayar</td>
                <td>Tanggal Bayar</td>
                <td>No Petugas</td>
                <td>No Kasir</td>
                <td>Manage</td>
            </tr>
        </thead>
        @foreach($tagihans as $tagihan)
        <tr>
            <td>{{ $tagihan->IDTagihan }}</td>
            <td>{{ $tagihan->NoPelanggan }}</td>
            <td>{{ $tagihan->Nama }}</td>
            <td>{{ $tagihan->TglDibuat }}</td>
            <td>{{ $tagihan->Pengunaan }}</td>
            <td>{{ $tagihan->PengunaanLebih }}</td>
            <td>{{ $tagihan->Biaya }}</td>
            <td>{{ $tagihan->Bulan }}</td>
            <td>{{ $tagihan->Status }}</td>
            <td><img src="{{ asset('storage/'.$tagihan->BuktiBayar) }}" height="100px" width="100px"></td>
            <td>{{ $tagihan->TglBayar }}</td>
            <td>{{ $tagihan->NoPetugas}}</td>
            <td>{{ $tagihan->NoKasir }}</td>
            <td>
                <a href="{{ route('tagihan.edit', $tagihan->IDTagihan) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('tagihan.destroy', $tagihan->IDTagihan) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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