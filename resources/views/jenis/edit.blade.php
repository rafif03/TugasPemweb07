@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('jenis.update', $jenis->IDJenis) }}" method="post">
    @csrf
    @method('PUT')
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Edit Jenis ID {{ $jenis->IDJenis }}</h3></td>
            </tr>
            <tr>
                <td>Tarif per Meter Kubik</td>
                <td><input type="text" name="TarifPerKubik" required>
            </tr>
            <tr>
                <td>Tarif Melebihi Batasan</td>
                <td><input type="text" name="TarifLebihBatasan" required>
            </tr>
            <tr>
                <td>Batasan</td>
                <td><input type="text" name="Batasan" required>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" style="float:right">Update</button></td>
            </tr>
        </table>
</form>
</div>
@endsection