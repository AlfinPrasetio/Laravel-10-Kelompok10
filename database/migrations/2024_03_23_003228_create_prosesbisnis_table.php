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
        Schema::create('prosesbisnis', function (Blueprint $table) {
            $table->integer('kode_proses_bisnis');
            $table->integer('kode_layanan_bisnis');
            $table->string('nama_proses_bisnis',100);
            $table->string('deskripsi',200);
            $table->string('tahapan_proses_bisnis',200);
            $table->string('kategori_proses_bisnis',100);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prosesbisnis');
    }
};
