@extends('layouts.main')

@section('content')
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Petugas {{ Auth::user()->Nama }}</h4></td></tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('tagihan.index') }}"><button class="btn btn-primary btn-lg ">Manage Tagihan</button>
            </td>
        </tr>
    </table>
@endsection