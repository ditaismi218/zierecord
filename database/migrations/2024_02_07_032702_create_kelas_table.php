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
        Schema::create('Kelas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_Jurusan');
            $table->enum('tingkat', ['10', '11', '12']);
            $table->integer('rombel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kelas');
    }
};
