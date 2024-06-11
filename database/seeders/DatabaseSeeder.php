<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Objek_Wisata;
use App\Models\ObjekWisataDetailTimeline;
use App\Models\ObjekWisataFasilitas;
use App\Models\ObjekWisataTimeline;
use App\Models\PaketTour;
use App\Models\PaketTourDetailTimeline;
use App\Models\PaketTourFasilitas;
use App\Models\PaketTourTimeline;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Artikel::factory(31)->create();
        Objek_Wisata::factory(5)->create();
        PaketTour::factory(5)->create();

        foreach (range(1, 5) as $id) {
            $timeline_1 = ObjekWisataTimeline::create([
                'objek_wisata_id' => $id,
                'timeline' => 'Tiba Di Dieng - Mengenal Budaya Lokal',
            ]);

            $detail_timeline_1 = [
                "Penjemputan di Bandara/Stasiun dan perjalanan menuju Dieng.",
                "Check-in di hotel dan istirahat sejenak.",
                "Makan siang di restoran lokal.",
                "Kunjungan ke Candi Arjuna, kompleks candi Hindu yang memiliki sejarah dan arsitektur yang menakjubkan.",
                "Menikmati senja di Telaga Warna, danau yang terkenal dengan airnya yang berwarna-warni.",
                "Makan malam di restoran lokal.",
            ];

            foreach ($detail_timeline_1 as $kegiatan) {
                ObjekWisataDetailTimeline::create([
                    'timeline_id' => $timeline_1->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $timeline_2 = ObjekWisataTimeline::create([
                'objek_wisata_id' => $id,
                'timeline' => 'Eksplorasi Alam Dieng',
            ]);

            $detail_timeline_2 = [
                "Sarapan di hotel.",
                "Mendaki Gunung Sikunir untuk menyaksikan matahari terbit yang menakjubkan dari puncak gunung.",
                "Mengunjungi Kawah Sikidang, kawah lumpur yang masih aktif dengan pemandangan yang spektakuler.",
                "Makan siang di restoran lokal.",
                "Mengunjungi Telaga Pengilon, danau alami yang indah dengan pemandangan pegunungan yang memukau.",
                "Mengunjungi kompleks candi Hindu yang terkenal, seperti Candi Gatotkaca, Candi Bima, dan Candi Dwarawati.",
                "Makan malam di restoran lokal.",
            ];

            foreach ($detail_timeline_2 as $kegiatan) {
                ObjekWisataDetailTimeline::create([
                    'timeline_id' => $timeline_2->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $timeline_3 = ObjekWisataTimeline::create([
                'objek_wisata_id' => $id,
                'timeline' => 'Perjalanan Pulang',
            ]);

            $detail_timeline_3 = [
                "Sarapan di hotel dan check-out.",
                "Mengunjungi Museum Kailasa, museum yang menampilkan koleksi seni dan budaya Dieng.",
                "Berbelanja oleh-oleh khas Dieng.",
                "Makan siang di restoran lokal.",
                "Kembali ke Bandara/Stasiun untuk perjalanan pulang.",
            ];

            foreach ($detail_timeline_3 as $kegiatan) {
                ObjekWisataDetailTimeline::create([
                    'timeline_id' => $timeline_3->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $list_fasilitas = [
                "Akomodasi: Menginap di hotel bintang tiga yang nyaman dan terletak strategis di wilayah Dieng.",
                "Transportasi: Transportasi antar-jemput dari Bandara/Stasiun ke Dieng dan selama tur berlangsung.",
                "Makan: Sarapan, makan siang, dan makan malam disediakan di restoran lokal yang menyajikan masakan khas Dieng.",
                "Pemandu Wisata: Pemandu wisata berpengalaman yang akan memberikan informasi dan panduan selama perjalanan.",
                "Tiket Masuk: Tiket masuk ke tempat-tempat wisata yang termasuk dalam paket.",
                "Belanja oleh-oleh: Kesempatan untuk membeli oleh-oleh khas Dieng.",
            ];

            foreach ($list_fasilitas as $fasilitas) {
                ObjekWisataFasilitas::create([
                    'objek_wisata_id' => $id,
                    'fasilitas' => $fasilitas
                ]);
            }
        }

        foreach (range(1, 5) as $id) {
            $timeline_1 = PaketTourTimeline::create([
                'paket_tour_id' => $id,
                'timeline' => 'Tiba Di Dieng - Mengenal Budaya Lokal',
            ]);

            $detail_timeline_1 = [
                "Penjemputan di Bandara/Stasiun dan perjalanan menuju Dieng.",
                "Check-in di hotel dan istirahat sejenak.",
                "Makan siang di restoran lokal.",
                "Kunjungan ke Candi Arjuna, kompleks candi Hindu yang memiliki sejarah dan arsitektur yang menakjubkan.",
                "Menikmati senja di Telaga Warna, danau yang terkenal dengan airnya yang berwarna-warni.",
                "Makan malam di restoran lokal.",
            ];

            foreach ($detail_timeline_1 as $kegiatan) {
                PaketTourDetailTimeline::create([
                    'timeline_id' => $timeline_1->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $timeline_2 = PaketTourTimeline::create([
                'paket_tour_id' => $id,
                'timeline' => 'Eksplorasi Alam Dieng',
            ]);

            $detail_timeline_2 = [
                "Sarapan di hotel.",
                "Mendaki Gunung Sikunir untuk menyaksikan matahari terbit yang menakjubkan dari puncak gunung.",
                "Mengunjungi Kawah Sikidang, kawah lumpur yang masih aktif dengan pemandangan yang spektakuler.",
                "Makan siang di restoran lokal.",
                "Mengunjungi Telaga Pengilon, danau alami yang indah dengan pemandangan pegunungan yang memukau.",
                "Mengunjungi kompleks candi Hindu yang terkenal, seperti Candi Gatotkaca, Candi Bima, dan Candi Dwarawati.",
                "Makan malam di restoran lokal.",
            ];

            foreach ($detail_timeline_2 as $kegiatan) {
                PaketTourDetailTimeline::create([
                    'timeline_id' => $timeline_2->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $timeline_3 = PaketTourTimeline::create([
                'paket_tour_id' => $id,
                'timeline' => 'Perjalanan Pulang',
            ]);

            $detail_timeline_3 = [
                "Sarapan di hotel dan check-out.",
                "Mengunjungi Museum Kailasa, museum yang menampilkan koleksi seni dan budaya Dieng.",
                "Berbelanja oleh-oleh khas Dieng.",
                "Makan siang di restoran lokal.",
                "Kembali ke Bandara/Stasiun untuk perjalanan pulang.",
            ];

            foreach ($detail_timeline_3 as $kegiatan) {
                PaketTourDetailTimeline::create([
                    'timeline_id' => $timeline_3->id,
                    'kegiatan' => $kegiatan
                ]);
            }

            $list_fasilitas = [
                "Akomodasi: Menginap di hotel bintang tiga yang nyaman dan terletak strategis di wilayah Dieng.",
                "Transportasi: Transportasi antar-jemput dari Bandara/Stasiun ke Dieng dan selama tur berlangsung.",
                "Makan: Sarapan, makan siang, dan makan malam disediakan di restoran lokal yang menyajikan masakan khas Dieng.",
                "Pemandu Wisata: Pemandu wisata berpengalaman yang akan memberikan informasi dan panduan selama perjalanan.",
                "Tiket Masuk: Tiket masuk ke tempat-tempat wisata yang termasuk dalam paket.",
                "Belanja oleh-oleh: Kesempatan untuk membeli oleh-oleh khas Dieng.",
            ];

            foreach ($list_fasilitas as $fasilitas) {
                PaketTourFasilitas::create([
                    'paket_tour_id' => $id,
                    'fasilitas' => $fasilitas
                ]);
            }
        }
    }
}
