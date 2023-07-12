@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h2>Daftar User</h2>
    <a href="{{ route('users.create') }}" style><button style="width: 150px;" type="button" class="btn btn-primary">Tambah User</button></a>
    <table class="table table-info table-hover table-striped">
        <thead style="position: sticky;top: 0">
            <tr>
                <td>ID User</td>
                <td>Username</td>
                <td>Name</td>
                <td>Pass</td>
                <td>Role</td>
                <td>Manage</td>
            </tr>
        </thead>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->Username }}</td>
            <td>{{ $user->Nama }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->IDRole }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" type="button" class="btn btn-info" >Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" type="button" method="post" onsubmit="return confirm('Yakin?')">
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