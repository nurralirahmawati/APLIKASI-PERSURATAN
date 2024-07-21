<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\NamaTandatgn;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SuratKeluarController extends Controller
{
    // Display a listing of the resource.
    public function index(): View
    {
        $suratkeluar = SuratKeluar::latest()->paginate(10);
        return view('suratkeluar.index', compact('suratkeluar'));
    }

    // Show the form for creating a new resource.
    public function create(): View
    {
        $pengguna = Pengguna::all();
        $namatandatgn = NamaTandatgn::all();
        return view('suratkeluar.create', compact('pengguna', 'namatandatgn'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_kop' => 'required|min:5',
            'tanggal' => 'required|date',
            'no_surat' => 'required|min:5',
            'perihal' => 'required|min:5',
            'tujuan' => 'required|min:5',
            'isi_surat' => 'required',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'id_user' => 'required|exists:pengguna,id',
        ]);

        SuratKeluar::create([
            'id_kop' => $request->id_kop,
            'tanggal' => $request->tanggal,
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'isi_surat' => $request->isi_surat,
            'id_tandatangan' => $request->id_tandatangan,
            'id_user' => $request->id_user,
        ]);

        return redirect()->route('suratkeluar.index')->with('success', 'Data Surat Keluar berhasil ditambahkan!');
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $suratkeluar = SuratKeluar::findOrFail($id);
        $pengguna = Pengguna::all();
        $namatandatgn = NamaTandatgn::all();
        return view('suratkeluar.edit', compact('suratkeluar', 'pengguna', 'namatandatgn'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'id_kop' => 'required|min:5',
            'tanggal' => 'required|date',
            'no_surat' => 'required|min:5',
            'perihal' => 'required|min:5',
            'tujuan' => 'required|min:5',
            'isi_surat' => 'required',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'id_user' => 'required|exists:pengguna,id',
        ]);

        $suratkeluar = SuratKeluar::findOrFail($id);
        $suratkeluar->update([
            'id_kop' => $request->id_kop,
            'tanggal' => $request->tanggal,
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'isi_surat' => $request->isi_surat,
            'id_tandatangan' => $request->id_tandatangan,
            'id_user' => $request->id_user,
        ]);

        return redirect()->route('suratkeluar.index')->with('success', 'Data Surat Keluar berhasil diubah!');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id): RedirectResponse
    {
        $suratkeluar = SuratKeluar::findOrFail($id);
        $suratkeluar->delete();
        return redirect()->route('suratkeluar.index')->with('success', 'Data Surat Keluar berhasil dihapus!');
    }
}
