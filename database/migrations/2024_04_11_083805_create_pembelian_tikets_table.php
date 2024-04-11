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
        Schema::create('pembelian_tikets', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->integer('id_users');
            $table->integer('id_destinasi');
            $table->integer('jumlah_tiket');
            $table->integer('harga');
            $table->string('jenis_pembayaran');
            $table->date('kedatangan');
            $table->datetime('tanggal_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_tikets');
    }
};
