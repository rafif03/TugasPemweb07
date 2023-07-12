@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('kasir.update', $kasir->NoKasir) }}" method="post">
    @csrf
    @method('PUT')
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Kasir no {{ $kasir->NoKasir }}</h3></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp" required>
            </tr>
            <tr>
                <td>No Rekening</td>
                <td><input type="text" name="NoRekening" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</div>
@endsection