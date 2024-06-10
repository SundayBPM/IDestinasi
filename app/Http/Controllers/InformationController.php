<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    // Menampilkan daftar objek wisata
    public function index()
    {
        $objekWisata = Objek_Wisata::all();
        return view('tourinfo.index', compact('objekWisata'));
    }

    // Menampilkan form untuk menambah objek wisata baru
    public function create()
    {
        return view('tourinfo.create');
    }

    // Menyimpan objek wisata baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'jam_operasional' => 'required|string',
            'jenis' => 'required|string',
            'foto' => 'required|string',
        ]);

        Objek_Wisata::create($validatedData);
        return redirect()->route('tourinfo.index')->with('success', 'Objek wisata berhasil ditambahkan.');
    }

    // Menampilkan detail objek wisata
    public function show($id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        return view('tourinfo.show', compact('objekWisata'));
    }

    // Menampilkan form untuk mengedit objek wisata
    public function edit($id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        return view('tourinfo.edit', compact('objekWisata'));
    }

    // Memperbarui data objek wisata
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'jam_operasional' => 'required|string',
            'jenis' => 'required|string',
            'foto' => 'required|string',
        ]);

        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->update($validatedData);
        return redirect()->route('tourinfo.index')->with('success', 'Objek wisata berhasil diperbarui.');
    }

    // Menghapus objek wisata
    public function destroy($id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->delete();
        return redirect()->route('tourinfo.index')->with('success', 'Objek wisata berhasil dihapus.');
    }
}
