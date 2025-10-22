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
        Schema::create('user_hours', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('hours')->default(0);
            $table->integer('minutes')->default(0);
            $table->integer('hour_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_hours');
    }
};
