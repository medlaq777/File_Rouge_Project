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
        Schema::create('system_statistics', function (Blueprint $table) {
            $table->id();
            $table->datetime('period_start');
            $table->datetime('period_end');
            $table->integer('total_users');
            $table->integer('new_users');
            $table->integer('total_studios');
            $table->integer('total_bookings');
            $table->json('most_booked_studios');
            $table->json('highest_rated_studios');
            $table->decimal('total_revenue', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_statistics');
    }
};
