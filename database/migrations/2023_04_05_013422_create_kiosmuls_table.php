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
        Schema::create('kiosmuls', function (Blueprint $table) {
            $table->string('kode_barang')->primarykey();
            $table->string('nama_barang', 30);
            $table->string('kategori_barang', 15);
            $table->integer('harga');
            $table->integer('qty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kiosmuls');
    }
};
