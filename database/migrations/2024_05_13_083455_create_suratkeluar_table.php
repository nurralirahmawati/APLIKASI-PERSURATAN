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
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_surat', 200);
            $table->string('perihal', 150);
            $table->string('tujuan', 50);
            $table->text('isi_surat');
            $table->unsignedBigInteger('namatandatangan_id');
            $table->foreign('namatandatangan_id')->references('id')->on('namatandatangan');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluar');
    }
};
