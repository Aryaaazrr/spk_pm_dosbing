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
        Schema::table('subkriteria', function (Blueprint $table) {
            $table->unsignedBigInteger('id_nilai')->after('subkriteria_name');
            $table->foreign('id_nilai')->references('id_nilai')->on('nilai')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subkriteria', function (Blueprint $table) {
            $table->dropColumn('id_nilai');
        });
    }
};
