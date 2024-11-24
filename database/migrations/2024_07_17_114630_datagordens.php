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
        Schema::create('datagordens', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('paragraf');
            $table->text('image');
            $table->string('judul_footer');
            $table->text('paragraf_footer');
            $table->string('button_tel');
            $table->string('button_wa');
            $table->string('theme');
            $table->string('template')->default('template 1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datagordens');
    }
};
