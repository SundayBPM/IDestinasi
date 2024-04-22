<?php

namespace App\Http\Controllers;

use App\Models\ObjekWisata;
use Illuminate\Http\Request;


class KelolaObjekWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaturanObjekWisatas = ObjekWisata::all();
        return view('kelola-objek-wisata.index', compact('pengaturanObjekWisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelola-objek-wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_destinasi' => 'required',
            'lokasi' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'jam_operasional' => 'required',
            'jenis' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan validasi untuk gambar
        ]);
    
        // Menyimpan gambar ke direktori penyimpanan dengan sub-direktori 'post-images'
        $imagePath = $request->file('foto')->store('post-images', 'public');
    
        // Mengambil nama file gambar saja
        $imageName = basename($imagePath);
    
        // Membuat entri baru dalam database
        ObjekWisata::create([
            'nama_destinasi' => $request->nama_destinasi,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jam_operasional' => $request->jam_operasional,
            'jenis' => $request->jenis,
            'nama_tiket' => $request->nama_tiket,
            'harga_tiket' => $request->harga_tiket,
            'foto' => $imageName, // Menyimpan hanya nama file gambar
        ]);
    
        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ObjekWisata $pengaturanObjekWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaturanObjekWisata = ObjekWisata::findOrFail($id);
        return view('kelola-objek-wisata.edit', compact('pengaturanObjekWisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_destinasi' => 'required',
            'lokasi' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'jam_operasional' => 'required',
            'jenis' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengaturanObjekWisata = ObjekWisata::findOrFail($id);

        $imagePath = $request->file('foto')->store('post-images', 'public');
        $imageName = basename($imagePath);

        $pengaturanObjekWisata->update([
            'nama_destinasi' => $request->nama_destinasi,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jam_operasional' => $request->jam_operasional,
            'jenis' => $request->jenis,
            'nama_tiket' => $request->nama_tiket,
            'harga_tiket' => $request->harga_tiket,
            'foto' => $imageName,
        ]);

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaturanObjekWisata = ObjekWisata::findOrFail($id);
        $pengaturanObjekWisata->delete();

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil dihapus!');
    }
}
