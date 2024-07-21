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
        Schema::create('kepala_surat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kop');
            $table->string('nama_kop',250);
            $table->text('alamat_kop');
            $table->string('nama_tujuan',200);
            $table->integer('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_surat');
    }
};
