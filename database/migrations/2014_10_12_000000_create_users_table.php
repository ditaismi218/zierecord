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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('id_operator');
            $table->string('username');
            $table->string('password');
            $table->enum('hak_akses', ['walas', 'umum', 'bk', 'prod', 'Siswa_Kelas', 'Siswa_km']);
            $table->enum('role', ['admin', 'Guru', 'Siswa']);
            $table->enum('status', ['aktif', 'suspend', 'tidak_aktif']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
