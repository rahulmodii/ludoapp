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
        Schema::table('games', function (Blueprint $table) {
            $table->tinyInteger('is_request')->default(0);
            $table->bigInteger('request_id')->default(0);
            $table->tinyInteger('is_accepted')->default(0);
            $table->tinyInteger('match_status')->default(0);
            $table->tinyInteger('cancel_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            //
        });
    }
};
