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
        Schema::create('profile_method', function (Blueprint $table) {
            $table->id('id_profile')->primary();
            $table->unsignedBigInteger('id_alternatif');
            $table->foreign('id_alternatif')->references('id_alternatif')->on('alternatif')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_kriteria');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_subkriteria');
            $table->foreign('id_subkriteria')->references('id_subkriteria')->on('subkriteria')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('id_nilai');
            // $table->foreign('id_nilai')->references('id_nilai')->on('nilai')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_method');
    }
};