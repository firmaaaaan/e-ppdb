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
        Schema::create('siswa_barus', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('nik')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('no_hp')->nullable();
            $table->string('kampung')->nullable();
            $table->string('desa')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kk')->nullable();
            $table->string('akta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_barus');
    }
};
