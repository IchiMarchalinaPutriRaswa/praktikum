<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan seluruh data buku
    public function index()
    {
        $bukus = Buku::all();

        return view('buku.index', compact('bukus'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan data buku
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_buku' => 'required|string|unique:bukus,kode_buku',
            'judul_buku' => 'required|string',
            'kategori' => 'required|string|in:Fiksi,Non Fiksi,Pendidikan,Teknologi,Sejarah',
        ]);

        Buku::create($data);

        return redirect()->route('buku.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
}
