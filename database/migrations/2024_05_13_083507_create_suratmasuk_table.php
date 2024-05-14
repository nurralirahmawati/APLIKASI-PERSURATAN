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
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_surat', 50);
            $table->string('asal_surat', 150);
            $table->string('perihal', 150);
            $table->string('disp1', 70);
            $table->string('disp2', 70);
            $table->unsignedBigInteger('namatandatangan_id');
            $table->foreign('namatandatangan_id')->references('id')->on('namatandatangan');
            $table->string('image', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuk');
    }
};
