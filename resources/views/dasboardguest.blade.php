@extends('layouts.main')

@section('content')
    <table class="table table-striped d-flex justify-content-center">
        <tr><td colspan="2"><h4>Welcome Guest  {{ Auth::user()->Nama }}</h4></td></tr>
        <tr>
            <td colspan="2"><h6>Mohon untuk tunggu Admin untuk mengassign role Anda!</h6>
            </td>
        </tr>
    </table>
@endsection