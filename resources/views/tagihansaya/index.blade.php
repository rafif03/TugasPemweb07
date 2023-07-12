@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar Tagihan</h2>
    <a href="{{ route('tagihan.create') }}"><button style="width: 150px;" type="button" class="btn btn-primary">Tambah Tagihan</button></a>
    <table class="table table-info table-hover table-striped">
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
            <td>Tanggal Bayar</td>
            <td>No Petugas</td>
            <td>No Kasir</td>
            <td>Bayar</td>
        </tr>
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
            <td>{{ $tagihan->TglBayar }}</td>
            <td>{{ $tagihan->NoPetugas}}</td>
            <td>{{ $tagihan->NoKasir }}</td>
            <td><a href="{{ route('tagihansaya.edit', $tagihan->IDTagihan) }}" type="button" class="btn btn-info" >Edit</a></td>
        <tr>
        @endforeach
    </table>
</div>
@endsection