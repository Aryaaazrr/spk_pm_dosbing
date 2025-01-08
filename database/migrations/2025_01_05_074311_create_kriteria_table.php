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
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id('id_kriteria');
            $table->string('kode_kriteria')->unique();
            $table->unsignedBigInteger('id_aspek');
            $table->foreign('id_aspek')->references('id_aspek')->on('aspek')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kriteria_name')->unique();
            $table->enum('tipe', ['Core Factor', 'Secondary Factor']);
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria');
    }
};
