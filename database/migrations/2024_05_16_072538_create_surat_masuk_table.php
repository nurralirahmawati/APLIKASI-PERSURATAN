<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    public function up(): void
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kop')->constrained('kepala_surat');
            $table->date('tanggal');
            $table->string('no_surat');
            $table->string('asal_surat');
            $table->string('perihal');
            $table->string('disp1');
            $table->string('disp2');
            $table->foreignId('id_tandatangan')->constrained('nama_tandatgn');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
}
