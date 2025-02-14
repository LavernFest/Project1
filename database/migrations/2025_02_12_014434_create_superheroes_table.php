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
            $table->string('RealName',150);
            #alter table `superheroes` add constraint `superheroes_genreid_foreign` foreign key (`genreId`) references `genre` (`id`))
            $table->foreignId('universeId')->constrained('universes');
            $table->foreignId('genreId')->constrained('genre');
            $table->string('imageUrl');
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
