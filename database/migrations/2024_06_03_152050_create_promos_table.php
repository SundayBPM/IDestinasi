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
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tiket');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('deskripsi', 1000);
            $table->string('detail', 1000);
            $table->string('syarat_ketentuan', 1000);
            $table->string('penutup', 1000);
            $table->string('foto_promo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
