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
        Schema::create('Mengajar', function (Blueprint $table) {
            $table->id();
            $table->string('id_Kelas');
            $table->string('id_tahun');
            $table->string('id_walas');
            $table->string('id_Guru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Mengajar');
    }
};
