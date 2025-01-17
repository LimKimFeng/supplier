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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->foreignId('id_barang')->constrained('barang');
            $table->string('nama_barang');
            $table->date('tgl_masuk');
            $table->integer('jml_masuk');
            $table->foreignId('id_suplier')->constrained('suplier');
            $table->timestamps();

            $table->foreign('id_suplier')->references('id_suplier')->on('suplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
