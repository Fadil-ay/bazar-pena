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
        Schema::create('_data__pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_produk');
            $table->string('nama_pemesan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_data__pesanan');
    }
};
