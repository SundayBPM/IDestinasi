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
        Schema::create('objek_wisata_detail_timelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('timeline_id');
            $table->string('kegiatan');
            $table->timestamps();

            $table->foreign('timeline_id')->references('id')->on('objek_wisata_timelines')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objek_wisata_detail_timelines');
    }
};
