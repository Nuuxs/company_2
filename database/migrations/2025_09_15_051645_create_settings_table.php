<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subjudul');
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('text_button');
            $table->string('icon');
            $table->string('no_hp');
            $table->string('ket_no_hp');
            $table->string('judul_team');
            $table->string('subjudul_team');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
