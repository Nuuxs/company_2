<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->string('divisi');
            $table->string('nama');
            $table->string('link_ig')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_in')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
