<?php

use App\Models\Categorie;
use App\Models\Langue;
use App\Models\User;
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
        Schema::create('histoires', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('characters');
            $table->string('Tags');
            // $table->unsignedBigInteger('langues_id');
            // $table->unsignedBigInteger('categories_id');
            $table->foreignIdFor(Langue::class)->constrained();
            $table->foreignIdFor(Categorie::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();

            $table->string('Copyright');
            $table->string('image');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histoires');
    }
};
