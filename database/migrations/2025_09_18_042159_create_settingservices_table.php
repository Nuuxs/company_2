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
        Schema::create('settingservices', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('judul_service');
            $table->string('subjudul_service');
            $table->string('judul_testimoni');
            $table->string('subjudul_testimoni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settingservices');
    }
};
