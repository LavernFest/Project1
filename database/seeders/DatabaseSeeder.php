<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* $this->call([GenderSeeder::class]);
        $this->call([UniverseSeeder::class]); */
        $this ->call([
            GenderSeeder::class,
            UniverseSeeder::class,
            GenreSeeder::class,
            SuperheroeSeeder::class
        ]);

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
