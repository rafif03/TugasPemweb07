<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggan;
use Illuminate\Http\Request;

class JenisPelangganController extends Controller
{
    public function index()
    {
        $jenisPelanggans = JenisPelanggan::all();

        return view('jenis_pelanggans.index', compact('jenisPelanggans'));
    }

    public function create()
    {
        return view('jenis_pelanggans.create');
    }

    public function store(Request $request)
    {
        $jenisPelanggan = JenisPelanggan::create($request->all());

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan created successfully.');
    }

    public function show($id)
    {
        $jenisPelanggan = JenisPelanggan::findOrFail($id);

        return view('jenis_pelanggans.show', compact('jenisPelanggan'));
    }

    public function edit($id)
    {
        $jenisPelanggan = JenisPelanggan::findOrFail($id);

        return view('jenis_pelanggans.edit', compact('jenisPelanggan'));
    }

    public function update(Request $request, $id)
    {
        $jenisPelanggan = JenisPelanggan::findOrFail($id);
        $jenisPelanggan->update($request->all());

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan updated successfully.');
    }

    public function destroy($id)
    {
        JenisPelanggan::findOrFail($id)->delete();

        return redirect()->route('jenis_pelanggans.index')
            ->with('success', 'Jenis Pelanggan deleted successfully.');
    }
}