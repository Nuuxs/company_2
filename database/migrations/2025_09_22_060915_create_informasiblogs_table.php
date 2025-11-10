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
        Schema::create('informasiblogs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->string('name_folder');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('text_button');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasiblogs');
    }
};
