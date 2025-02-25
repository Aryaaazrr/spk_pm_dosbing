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
        Schema::create('submission', function (Blueprint $table) {
            $table->id('id_submission');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('prodi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission');
    }
};