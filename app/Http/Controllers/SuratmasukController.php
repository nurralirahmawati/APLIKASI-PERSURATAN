<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use App\Models\NamaTandatgn;
use App\Models\SuratMasuk;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    // Display a listing of the resource.
    public function index(): View
    {
        $suratmasuk = SuratMasuk::latest()->paginate(10);
        return view('suratmasuk.index', compact('suratmasuk'));
    }

    // Show the form for creating a new resource.
    public function create(): View
    {
        $kepalasurat = KepalaSurat::all();
        $namatandatgn = NamaTandatgn::all();
        return view('suratmasuk.create', compact('kepalasurat', 'namatandatgn'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_kop' => 'required|exists:kepala_surat,id',
            'tanggal' => 'required|date',
            'no_surat' => 'required|min:5',
            'asal_surat' => 'required|min:5',
            'perihal' => 'required|min:5',
            'disp1' => 'required|min:5',
            'disp2' => 'required|min:5',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'image' => 'required|min:5'
        ]);

        SuratMasuk::create($request->all());

        return redirect()->route('suratmasuk.index')->with('success', 'Data Surat Masuk berhasil ditambahkan!');
    }

    // Show the form for editing the specified resource.
    public function edit($id): View
    {
        $suratmasuk = SuratMasuk::findOrFail($id);
        $kepalasurat = KepalaSurat::all();
        $namatandatgn = NamaTandatgn::all();
        return view('suratmasuk.edit', compact('suratmasuk', 'kepalasurat', 'namatandatgn'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'id_kop' => 'required|exists:kepala_surat,id',
            'tanggal' => 'required|date',
            'no_surat' => 'required|min:5',
            'asal_surat' => 'required|min:5',
            'perihal' => 'required|min:5',
            'disp1' => 'required|min:5',
            'disp2' => 'required|min:5',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'image' => 'required|min:5'
        ]);

        $suratmasuk = SuratMasuk::findOrFail($id);
        $suratmasuk->update($request->all());

        return redirect()->route('suratmasuk.index')->with('success', 'Data Surat Masuk berhasil diubah!');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id): RedirectResponse
    {
        $suratmasuk = SuratMasuk::findOrFail($id);
        $suratmasuk->delete();
        return redirect()->route('suratmasuk.index')->with('success', 'Data Surat Masuk berhasil dihapus!');
    }
}
