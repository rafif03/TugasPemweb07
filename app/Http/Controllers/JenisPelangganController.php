<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Pelanggan;
use Illuminate\Http\Request;

class JenisPelangganController extends Controller
{
    public function index()
    {
        $jeniss = Jenis_Pelanggan::all();

        return view('jenis.index', compact('jeniss'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
        $jenis = Jenis_Pelanggan::create($request->all());

        return redirect()->route('jenis.index')
            ->with('success', 'Jenis Pelanggan created successfully.');
    }

    public function show($id)
    {
        $jenisPelanggan = Jenis_Pelanggan::findOrFail($id);

        return view('jenis.show', compact('jenisPelanggan'));
    }

    public function edit($id)
    {
        $jenis = Jenis_Pelanggan::findOrFail($id);

        return view('jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $jenisPelanggan = Jenis_Pelanggan::findOrFail($id);
        $jenisPelanggan->update($request->all());

        return redirect()->route('jenis.index')
            ->with('success', 'Jenis Pelanggan updated successfully.');
    }

    public function destroy($id)
    {
        Jenis_Pelanggan::findOrFail($id)->delete();

        return redirect()->route('jenis.index')
            ->with('success', 'Jenis Pelanggan deleted successfully.');
    }
}