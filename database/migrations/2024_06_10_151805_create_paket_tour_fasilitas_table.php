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
        Schema::create('paket_tour_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_tour_id');
            $table->string('fasilitas');
            $table->timestamps();

            $table->foreign('paket_tour_id')->references('id')->on('paket_tours')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_tour_fasilitas');
    }
};
