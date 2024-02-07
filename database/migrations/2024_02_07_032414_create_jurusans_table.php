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
        Schema::create('Jurusan', function (Blueprint $table) {
            $table->id();
            $table->enum('kompetensi_keahlian', ['pplg', 'tjkt', 'bdps', 'mplb', 'akkul']);
            $table->enum('bidang_keahlian', ['teknologi', 'manajemen']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jurusan');
    }
};
