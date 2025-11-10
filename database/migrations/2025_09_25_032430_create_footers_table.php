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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_company');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('link_ig');
            $table->string('link_fb');
            $table->string('link_twitter');
            $table->string('link_in');
            $table->string('nama_website');
            $table->string('teks_copyright');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
