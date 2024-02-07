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
        Schema::create('Konsultasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pengampu');
            $table->integer('id_th_ajaran');
            $table->integer('id_Siswa');
            $table->integer('id_walas');
            $table->string('kasus');
            $table->string('penanganan');
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Konsultasi');
    }
};
