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
            $table->id('id');
            $table->string('nama_destinasi');
            $table->string('jenis');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->integer('harga_tiket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objek__wisatas');
    }
};
