<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use App\Models\Mengelola;
use App\Models\Tiket; // Import model Tiket
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaObjekWisataController extends Controller
{
    public function index()
    {
        $pengaturanObjekWisatas = Objek_Wisata::all();
        return view('kelola-objek-wisata.index', compact('pengaturanObjekWisatas'));
    }

    public function create()
    {
        return view('kelola-objek-wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wisata' => 'required',
            'lokasi' => 'required',
            'longitude',
            'latitude',
            'jam_operasional' => 'required',
            'deskripsi' => 'required',
            'jenis' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan validasi untuk gambar
        ]);

        // Menyimpan gambar ke direktori penyimpanan dengan sub-direktori 'post-images'
        $imagePath = $request->file('foto')->store('post-images', 'public');

        // Mengambil nama file gambar saja
        $imageName = basename($imagePath);

        // Membuat entri baru dalam database untuk Objek_Wisata
        $objekWisata = Objek_Wisata::create([
            'nama_wisata' => $request->nama_wisata,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jam_operasional' => $request->jam_operasional,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'foto' => $imageName, // Menyimpan hanya nama file gambar
        ]);

        // Membuat entri baru dalam database untuk Tiket
        Tiket::create([
            'nama_tiket' => $request->nama_tiket,
            'harga_tiket' => $request->harga_tiket,
            'id_objek_wisata' => $objekWisata->id, // Mengaitkan tiket dengan objek wisata yang baru dibuat
        ]);

        Mengelola::create([
            'user_id' => Auth::id(),
            'objek_wisata_id' => $objekWisata->id,
        ]);

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show(Objek_Wisata $pengaturanObjekWisata)
    {
        //
    }

    public function edit($id)
    {
        $pengaturanObjekWisata = Objek_Wisata::with('tiket')->findOrFail($id);
        return view('kelola-objek-wisata.edit', compact('pengaturanObjekWisata'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_wisata' => 'required',
            'lokasi' => 'required',
            'longitude',
            'latitude',
            'jam_operasional' => 'required',
            'deskripsi' => 'required',
            'jenis' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengaturanObjekWisata = Objek_Wisata::findOrFail($id);

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('post-images', 'public');
            $imageName = basename($imagePath);
        } else {
            $imageName = $pengaturanObjekWisata->foto;
        }

        $pengaturanObjekWisata->update([
            'nama_wisata' => $request->nama_wisata,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jam_operasional' => $request->jam_operasional,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'foto' => $imageName,
        ]);

        $tiket = Tiket::where('id_objek_wisata', $id)->first();

        if ($tiket) {
            $tiket->update([
                'nama_tiket' => $request->nama_tiket,
                'harga_tiket' => $request->harga_tiket,
            ]);
        } else {
            Tiket::create([
                'nama_tiket' => $request->nama_tiket,
                'harga_tiket' => $request->harga_tiket,
                'id_objek_wisata' => $id,
            ]);
        }

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pengaturanObjekWisata = Objek_Wisata::findOrFail($id);
        $pengaturanObjekWisata->delete();

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil dihapus!');
    }
}