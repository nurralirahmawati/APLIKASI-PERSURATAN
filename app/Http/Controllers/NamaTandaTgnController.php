<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatgn;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NamaTandaTgnController extends Controller
{
    /**
     * Tampilkan daftar semua data NamaTandatgn.
     */
    public function index(): View
    {
        $namatandatgn = NamaTandatgn::latest()->paginate(10);
        return view('namatandatgn.index', compact('namatandatgn'));
    }

    /**
     * Tampilkan formulir untuk membuat data baru NamaTandatgn.
     */
    public function create(): View
    {
        return view('namatandatgn.create');
    }

    /**
     * Simpan data NamaTandatgn baru ke database.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_tandatangan' => 'required|integer|unique:nama_tandatgn,id', // Validasi id_tandatangan
            'nama_tandatgn' => 'required|min:5|max:100', // Validasi nama_tandatgn
            'jabatan' => 'required|min:5|max:200', // Validasi jabatan
            'nip' => 'required|min:5|max:50|unique:nama_tandatgn,nip', // Validasi nip
        ]);

        NamaTandatgn::create([
            'id_tandatangan' => $request->id_tandatangan,
            'nama_tandatgn' => $request->nama_tandatgn,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
        ]);

        return redirect()->route('namatandatgn.index')->with('success', 'Data Surat berhasil ditambahkan!');
    }

    /**
     * Tampilkan formulir untuk mengedit data NamaTandatgn.
     */
    public function edit($id): View
    {
        $namatandatgn = NamaTandatgn::findOrFail($id);
        return view('namatandatgn.edit', compact('namatandatgn'));
    }

    /**
     * Perbarui data NamaTandatgn yang ada di database.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'id_tandatangan' => 'required|min:5|unique:nama_tandatgn,id', // Validasi id_tandatangan
            'nama_tandatgn' => 'required|min:5|max:100', // Validasi nama_tandatgn
            'jabatan' => 'required|min:5|max:200', // Validasi jabatan
            'nip' => 'required|min:5|max:50|unique:nama_tandatgn,nip', // Validasi nip
        ]);

        $namatandatgn = NamaTandatgn::findOrFail($id);
        $namatandatgn->update([
            'id_tandatangan' => $request->id_tandatangan,
            'nama_tandatgn' => $request->nama_tandatgn,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
        ]);

        return redirect()->route('namatandatgn.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Hapus data NamaTandatgn dari database.
     */
    public function destroy(string $id): RedirectResponse
    {
        $namatandatgn = NamaTandatgn::findOrFail($id);
        $namatandatgn->delete();
        return redirect()->route('namatandatgn.index')->with('success', 'Data berhasil dihapus!');
    }
}
