<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Object_Wisata>
 */
class Objek_WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $destinasi = fake('id_ID')->city();
        $harga_tiket = number_format((100000 * rand(5, 10)) * rand(2, 5), 0, ',', '.');
        $img = [
            "Ollon.png",
            "img1.jpg",
            "img2.jpg",
            "img3.jpg",
            "img4.jpg",
            "img5.jpg",
        ];

        return [
            'nama_destinasi' => "Wisata $destinasi",
            'lokasi' => $destinasi,
            'longitude' => fake("id_ID")->longitude(),
            'latitude' => fake("id_ID")->latitude(),
            'jam_operasional' => "08.00 - 15.00",
            'jenis' => "jenis",
            'nama_tiket' => "Paket Wisata $destinasi",
            'harga_tiket' => $harga_tiket,
            'deskripsi' => fake('id_ID')->paragraph(2, true),
            'foto' => $img[shuffle($img)],
            'total_orang' => 3,
        ];
    }
}
