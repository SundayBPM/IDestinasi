<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('promos')->insert([
            [
                'nama_tiket' => "Promo Diskon 50% ke Lombok",
                'start_date' => Carbon::parse('2024-04-01'),
                'end_date' => Carbon::parse('2024-06-01'),
                'deskripsi' => $faker->sentences(3, true),
                'detail' => $faker->sentences(4, true),
                'syarat_ketentuan' => $faker->sentences(4, true),
                'penutup' => $faker->text(50),
                'foto_promo' => 'img/lombok-promo.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_tiket' => "Promo Pemilu Dufan",
                'start_date' => Carbon::parse('2024-07-01'),
                'end_date' => Carbon::parse('2024-10-01'),
                'deskripsi' => $faker->sentences(3, true),
                'detail' => $faker->sentences(4, true),
                'syarat_ketentuan' => $faker->sentences(4, true),
                'penutup' => $faker->text(50),
                'foto_promo' => 'img/dufan-promo.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
