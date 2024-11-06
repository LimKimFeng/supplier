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
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('peminjam');
            $table->date('tgl_pinjam');
            $table->foreignId('id_barang')->constrained('barang');
            $table->string('nama_barang');
            $table->integer('jml_barang');
            $table->date('tgl_kembali')->nullable();
            $table->string('kondisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
