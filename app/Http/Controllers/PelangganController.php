<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = DB::table('Pelanggan')->join('Users', 'Users.id','=','Pelanggan.IDUser');
        $pelanggans = $pelanggans->get();

        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        $users       = User::where('IDRole','=',4)->get();
        $petugass    = DB::table('petugas')->join('Users', 'Users.id','=','petugas.IDUser')->get();
        return view('pelanggan.create', compact('users', 'petugass'));
    }

    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan created successfully.');
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $users       = User::where('IDRole','=',4)->get();
        $petugass    = Petugas::all();

        return view('pelanggan.edit', compact('pelanggan','users','petugass'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan updated successfully.');
    }

    public function destroy($id)
    {
        Pelanggan::findOrFail($id)->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan deleted successfully.');
    }
}