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
        if (!Schema::hasTable('surat_keluar')) {
            Schema::create('surat_keluar', function (Blueprint $table) {
                $table->id();
                $table->integer('id_kop');
                $table->date('tanggal');
                $table->string('no_surat', 200);
                $table->string('perihal', 150);
                $table->string('tujuan', 50);
                $table->text('isi_surat');
                $table->unsignedBigInteger('id_tandatangan'); 
                $table->unsignedBigInteger('id_user'); 
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
