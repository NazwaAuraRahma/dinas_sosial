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
        Schema::create('Infopengaduan', function (Blueprint $table) {
            $table->id();
            $table->date('judul_laporan');
            $table->string('nama', 100);
            $table->string('nik', 100);
            $table->string('laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Infopengaduan');
    }
};
