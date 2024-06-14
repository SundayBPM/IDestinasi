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
        Schema::create('paket_tour_detail_timelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('timeline_id');
            $table->string('kegiatan');
            $table->timestamps();

            $table->foreign('timeline_id')->references('id')->on('paket_tour_timelines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_tour_detail_timelines');
    }
};
