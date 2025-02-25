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
        Schema::create('submission_detail', function (Blueprint $table) {
            $table->id('id_submission_detail');
            $table->unsignedBigInteger('id_submission');
            $table->foreign('id_submission')->references('id_submission')->on('submission')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_alternatif');
            $table->foreign('id_alternatif')->references('id_alternatif')->on('alternatif')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_detail');
    }
};