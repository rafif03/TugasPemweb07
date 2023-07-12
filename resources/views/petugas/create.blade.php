@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('petugas.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Petugas</h3></td>
            </tr>
            <tr>
                <td>ID User</td>
                <td>
                <select name="IDUser">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->Nama }}</option>
                    @endforeach
                </td>
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
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</div>
@endsection