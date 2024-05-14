<?php

namespace App\Http\Controllers;

use App\Models\Kepalasurat;
use App\Models\User;
use Illuminate\Http\Request;

class KepalasuratController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('kepalasurat.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama_kop' => 'required|string|max:250',
            'alamat_kop' => 'required|string',
            'nama_tujuan' => 'required|string|max:200',
        ]);

        Kepalasurat::create([
            'user_id' => $validatedData['user_id'],
            'nama_kop' => $validatedData['nama_kop'],
            'alamat_kop' => $validatedData['alamat_kop'],
            'nama_tujuan' => $validatedData['nama_tujuan'],
        ]);

        return redirect()->route('kepalasurat.index')->with('success', 'Kepalasurat created successfully.');
    }

    public function index()
    {
        $kepalasurats = Kepalasurat::with('user')->get();
        return view('kepalasurat.index', compact('kepalasurats'));
    }

    public function show(Kepalasurat $kepalasurat)
    {
        return view('kepalasurat.show', compact('kepalasurat'));
    }
    
    public function destroy($id)
    {
        $kepalasurat = Kepalasurat::findOrFail($id);
        $kepalasurat->delete();
        
        return redirect()->route('kepalasurat.index')->with('success', 'Kepalasurat deleted successfully.');
    }
}
