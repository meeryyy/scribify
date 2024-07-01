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
        Schema::table('chapitres', function (Blueprint $table) {
            $table->foreign('histoires_id')->references('id')->on('histoires');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chapitres', function (Blueprint $table) {
            $table->dropForeign(['histoires_id']);  

        });
    }
};
