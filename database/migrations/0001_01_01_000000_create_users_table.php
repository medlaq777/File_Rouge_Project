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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'phone',
                'address',
                'city',
                'country',
                'bio',
                'profile_image',
                'contact_info',
                'name'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('username')->unique();
            $table->string('phone')->unique();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->default('Morocco');
            $table->string('bio');
            $table->string('profile_image')->default('default.png');
            $table->string('contact_info')->nullable();
        });
    }
};
