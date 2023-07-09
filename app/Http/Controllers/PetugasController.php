<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetugasController extends Controller
{
    public function index()
    {
        $petugass = DB::table('petugas')->join('Users', 'Users.id','=','petugas.IDUser');
        $petugass = $petugass->get();

        return view('petugas.index', compact('petugass'));
    }

    public function create()
    {
        $users       = User::where('IDRole','=',2)->get();
        return view('petugas.create', compact('users'));
    }

    public function store(Request $request)
    {
        $petugas = Petugas::create($request->all());

        return redirect()->route('petugas.index')
            ->with('success', 'Petugas created successfully.');
    }

    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);

        return view('petugas.show', compact('Petugas'));
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);

        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->update($request->all());

        return redirect()->route('petugas.index')
            ->with('success', 'Petugas updated successfully.');
    }

    public function destroy($id)
    {
        Petugas::findOrFail($id)->delete();

        return redirect()->route('petugas.index')
            ->with('success', 'Petugas deleted successfully.');
    }
}