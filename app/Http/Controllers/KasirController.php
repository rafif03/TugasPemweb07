<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KasirController extends Controller
{
    public function index()
    {
        $kasirs = DB::table('kasir')->join('Users', 'Users.id','=','kasir.IDUser');
        $kasirs = $kasirs->get();

        return view('kasir.index', compact('kasirs'));
    }

    public function create()
    {
        $users       = User::where('IDRole','=',3)->get();
        return view('kasir.create', compact('users'));
    }

    public function store(Request $request)
    {
        $kasir = Kasir::create($request->all());

        return redirect()->route('kasir.index')
            ->with('success', 'Kasir created successfully.');
    }

    public function show($id)
    {
        $kasir = Kasir::findOrFail($id);

        return view('kasir.show', compact('kasir'));
    }

    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);

        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, $id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->update($request->all());

        return redirect()->route('kasir.index')
            ->with('success', 'Kasir updated successfully.');
    }

    public function destroy($id)
    {
        Kasir::findOrFail($id)->delete();

        return redirect()->route('kasir.index')
            ->with('success', 'Kasir deleted successfully.');
    }
}