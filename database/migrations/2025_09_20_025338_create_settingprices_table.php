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
        Schema::create('settingprices', function (Blueprint $table) {
            $table->id();
            $table->string('nama_halaman')->nullable();
            $table->string('text_price');
            $table->string('ket_price');
            $table->string('judul_price');
            $table->string('text_discount');
            $table->string('discount');
            $table->string('ket_discount');
            $table->string('deskripsi_discount');
            $table->string('text_button');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settingprices');
    }
};
