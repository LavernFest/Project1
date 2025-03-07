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
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('realname',150);

            /* $table->unsignedBigInteger('universe_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('gender_id');

            $table->foreign('universe_id')->references('id')->on('universes');
            $table->foreignId('genre_id')->references('id')->on('genres');
            $table->foreignId('gender_id')->references('id')->on('genders'); */
            //Example $table->foreignId('user_id')->constrained();
            $table->foreignId('universe_id')->constrained();
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('gender_id')->constrained();

            $table->string('imageUrl')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
