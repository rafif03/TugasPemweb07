<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Pelanggan;
use Illuminate\Http\Request;

class JenisPelangganController extends Controller
{
    public function index()
    {
        $jenisPelanggans = Jenis_Pelanggan::all();

        return view('jenis_pelanggans.index', compact('jenisPelanggans'));
    }

    public function create()
    {
        return view('jenis_pelanggans.create');
    }

    public function store(Request $request)
    {
        $jenisPelanggan = Jenis_Pelanggan::create($request->all());

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan created successfully.');
    }

    public function show($id)
    {
        $jenisPelanggan = Jenis_Pelanggan::findOrFail($id);

        return view('jenis_pelanggans.show', compact('jenisPelanggan'));
    }

    public function edit($id)
    {
        $jenisPelanggan = Jenis_Pelanggan::findOrFail($id);

        return view('jenis_pelanggans.edit', compact('jenisPelanggan'));
    }

    public function update(Request $request, $id)
    {
        $jenisPelanggan = Jenis_Pelanggan::findOrFail($id);
        $jenisPelanggan->update($request->all());

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan updated successfully.');
    }

    public function destroy($id)
    {
        Jenis_Pelanggan::findOrFail($id)->delete();

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan deleted successfully.');
    }
}