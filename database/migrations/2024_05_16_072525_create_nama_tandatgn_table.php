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
        Schema::create('nama_tandatgn', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tandatangan')->unique(); // Ensure that id_tandatangan is unique
            $table->string('nama_tandatgn', 100);
            $table->string('jabatan', 200);
            $table->string('nip')->unique(); // If NIP should be unique
            $table->timestamps();
            
            $table->index('id_tandatangan'); // Add an index for performance if used for joins or searches
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_tandatgn');
    }
};
