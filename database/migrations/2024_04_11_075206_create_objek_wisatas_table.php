<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('objek_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_destinasi');
            $table->string('lokasi');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('jam_operasional');
            $table->text('jenis');
            $table->string('nama_tiket');
            $table->string('harga_tiket');
            $table->string('foto');
            $table->text('deskripsi');
            $table->integer('total_orang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objek_wisatas');
    }
};
