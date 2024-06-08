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
        Schema::create('sarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer("id_objek_wisata");
            $table->integer("id_pembelian_tiket");
            $table->tinyInteger("rating");
            $table->tinyInteger("penilaian_nps");
            $table->tinyInteger("penilaian_amenitas");
            $table->tinyInteger("penilaian_ansilari1");
            $table->tinyInteger("penilaian_ansilari2");
            $table->tinyInteger("penilaian_aksesibilitas");
            $table->tinyInteger("penilaian_atraksi");
            $table->text("kritik_saran");
            $table->text("ulasan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarans');
    }
};
