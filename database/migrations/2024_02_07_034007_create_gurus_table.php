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
        Schema::create('Guru', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->string('nama');
            $table->integer('jk');
            $table->string('ttl');
            $table->string('alamat');
            $table->integer('jml_mapel');
            $table->integer('jml_jp');
            $table->integer('kontak');
            $table->enum('status', ['aktif', 'suspend', 'tidak_aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Guru');
    }
};
