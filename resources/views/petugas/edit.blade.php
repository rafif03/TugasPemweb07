@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('petugas.update', $petugas->NoPetugas) }}" method="post">
    @csrf
    @method('PUT')
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Petugas no. {{ $petugas->NoPetugas }}</h3></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>Area</td>
                <td><input type="text" name="Area" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</div>
@endsection