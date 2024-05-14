<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function tampilData(string $id):View {

        return view('user.profile',[
        'user' => User::findOrFail($id)
        ]);
    }

    public function index(): View
    {
        $users = User::latest()->paginate(10);
        return view('user.index', compact('users'));
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'status' => 'required|string|max:7',
            'nama_petugas' => 'required|string|max:30',
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:50',
            'status' => 'required|string|max:7',
            'nama_petugas' => 'required|string|max:30',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->password);
        }

        User::whereId($id)->update($validatedData);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}