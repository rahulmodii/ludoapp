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
        Schema::table('battles', function (Blueprint $table) {
            $table->bigInteger('winning_id')->nullable();
            $table->tinyInteger('creator_id_match_status')->default(0);
            $table->string('creator_id_cancel_status')->nullable();
            $table->tinyInteger('joining_id_match_status')->default(0);
            $table->string('joining_id_cancel_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('battles', function (Blueprint $table) {
            //
        });
    }
};
