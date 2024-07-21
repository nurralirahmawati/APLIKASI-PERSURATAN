<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PenggunaController extends Controller
{
    public function index(): View
    {
       $pengguna = Pengguna::latest()->paginate(10);
       return view('pengguna.index',compact('pengguna'));
    }

    public function create(): View
    {
        return view('pengguna.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_user' => 'required|min:5|unique:pengguna,id_user',
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'status' => 'required|min:5',
            'nama_ptgs' => 'required|min:5'
        ]);

        Pengguna::create([
            'id_user' => $request->id_user,
            'username' => $request->username,
            'password' => $request->password,
            'status' => $request->status,
            'nama_ptgs' => $request->nama_ptgs
        ]);

        return redirect()->route('pengguna.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);

        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $pengguna = Pengguna::findOrFail($id);
        $request->validate([
            'id_user' => 'required|min:5|unique:pengguna,id_user',
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'status' => 'required|min:5',
            'nama_ptgs' => 'required|min:5'
        ]);

        $pengguna->update([
            'id_user' => $request->id_user,
            'username' => $request->username,
            'password' => $request->password,
            'status' => $request->status,
            'nama_ptgs' => $request->nama_ptgs
            ]);

        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}