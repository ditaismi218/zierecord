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
        Schema::create('Siswa', function (Blueprint $table) {
            $table->id();
            $table->string('id_Kelas');
            $table->integer('nis');
            $table->string('nama');
            $table->enum('jk', ['p', 'l']);
            $table->string('alamat');
            $table->integer('kontak');
            $table->string('wali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Siswa');
    }
};
