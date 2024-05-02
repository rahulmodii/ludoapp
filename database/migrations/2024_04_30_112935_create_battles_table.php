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
        Schema::create('battles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('creator_id')->default(0);
            $table->bigInteger('joining_id')->default(0);
            $table->bigInteger('game_id')->default(0);
            $table->string('creator_response')->nullable();
            $table->string('joining_response')->nullable();
            $table->integer('amount')->default(0);
            $table->string('proof')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('battles');
    }
};
