<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use PhpParser\Node\Expr\Cast\String_;

class KepalaSuratController extends Controller
{
    public function index(): View
    {
        $kepalasurat = KepalaSurat::latest()->paginate(10);
        return view('kepalasurat.index', compact('kepalasurat'));
    }

    public function create(): View
    {
        $pengguna = Pengguna::all();
        return view('kepalasurat.create', compact('pengguna'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_kop' => 'required|integer|unique:kepala_surat,id',
            'nama_kop' => 'required|min:5',
            'alamat_kop' => 'required|min:5',
            'nama_tujuan' => 'required|min:5',
            'id_user' => 'required|exists:pengguna,id',
        ]);
        KepalaSurat::create([
            'id_kop' => $request->id_kop,
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'id_user' => $request->id_user,
            
        ]);

        return redirect()->route('kepalasurat.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $kepalasurat = KepalaSurat::findOrFail($id);
        $pengguna = Pengguna::all();
        return view('kepalasurat.edit', compact('kepalasurat', 'pengguna'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $kepalasurat = KepalaSurat::findOrFail($id);
        $request->validate([
            'id_kop' => 'required|integer|unique:kepala_surat,id',
            'nama_kop' => 'required|min:5',
            'alamat_kop' => 'required|min:5',
            'nama_tujuan' => 'required|min:5',
            'id_user' => 'required|exists:pengguna,id',
        ]);

        $kepalasurat->update([
            'id_kop' => $request->id_kop,
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'id_user' => $request->id_user,
            
            ]);

        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(String $id): RedirectResponse
    {
        $kepalasurat = KepalaSurat::findOrFail($id);
        $kepalasurat->delete();
        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
