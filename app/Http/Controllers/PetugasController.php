<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugass = Petugas::all();

        return view('petugass.index', compact('Petugass'));
    }

    public function create()
    {
        return view('petugass.create');
    }

    public function store(Request $request)
    {
        $petugas = Petugas::create($request->all());

        return redirect()->route('petugass.index')
            ->with('success', 'Petugas created successfully.');
    }

    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);

        return view('petugass.show', compact('Petugas'));
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);

        return view('petugass.edit', compact('Petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->update($request->all());

        return redirect()->route('petugass.index')
            ->with('success', 'Petugas updated successfully.');
    }

    public function destroy($id)
    {
        Petugas::findOrFail($id)->delete();

        return redirect()->route('petugass.index')
            ->with('success', 'Petugas deleted successfully.');
    }
}