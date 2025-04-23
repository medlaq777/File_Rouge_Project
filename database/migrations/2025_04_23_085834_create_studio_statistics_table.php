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
        Schema::create('studio_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studio_id')->constrained('studios')->onDelete('cascade');
            $table->datetime('period_start');
            $table->datetime('period_end');
            $table->integer('total_bookings')->default(0);
            $table->float('average_rating', 3, 2)->default(0);
            $table->float('occupancy_rate', 5, 2)->default(0);
            $table->json('top_features')->nullable();
            $table->json('recent_reviews')->nullable();
            $table->decimal('total_revenue', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studio_statistics');
    }
};
