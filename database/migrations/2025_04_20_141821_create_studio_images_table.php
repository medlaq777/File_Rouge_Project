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
        Schema::create('studio_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studio_id')->constrained('studios')->onDelete('cascade');
            $table->string('image_path');
            $table->string('image_name');
            $table->string('image_type');
            $table->string('image_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studio_images');
    }
};
