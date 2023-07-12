@extends('layouts.main')

@section('content')
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Admin  {{ Auth::user()->Nama }}</h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('users.index') }}"><button class="btn btn-primary btn-lg ">Manage User</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('petugas.index') }}"><button  class="btn btn-primary btn-lg ">Manage Petugas</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('kasir.index') }}"><button class="btn btn-primary btn-lg ">Manage Kasir</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('pelanggan.index') }}"><button class="btn btn-primary btn-lg ">Manage Pelanggan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('tagihan.index') }}"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('jenis.index') }}"><button style="float: center" class="btn btn-primary btn-lg ">Manage Jenis</button>
            </td>
        </tr>
    </table>
@endsection