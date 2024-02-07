<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Kehadiran', function (Blueprint $table) {
            $table->id();
            $table->integer('id_Siswa');
            $table->integer('id_Pembelajaran');
            $table->enum('Kehadiran', ['hadir', 'sakit', 'izin', 'alfa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kehadiran');
    }
};
