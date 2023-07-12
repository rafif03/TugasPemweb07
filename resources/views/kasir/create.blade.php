@extends('layouts.main')

@section('content')
<div class="container-fluid">
<form action=" {{ route('kasir.store') }}" method="post">
    @csrf
        <table class="table table-info table-hover table-striped">
            <tr>
                <td colspan="2"><h3>Buat Kasir</h3></td>
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
                <td colspan="2"><button type="submit" style="float:right">Create</button></td>
            </tr>
        </table>
</form>
</div>
@endsection