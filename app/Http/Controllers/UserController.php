<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'Nama'      => $request->input('Nama'),
            'Username'  => $request->input('Username'),
            'Password'  => $request->input('Password'),
            'IDRole'    => $request->input('IDRole')
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('users.show', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
