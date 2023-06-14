<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        Users::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $users = Users::findOrFail($id);

        return view('users.show', compact('users'));
    }

    public function edit($id)
    {
        $users = Users::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $users->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
