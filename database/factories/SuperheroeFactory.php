<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Superheroe;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroe>
 */
class SuperheroeFactory extends Factory
{
    protected $model = Superheroe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /* EXAMPLE OF FAKER GENERATION 
        public function definition()
  {
   return [
     'name' => $this->faker->name(),
     'email' => $this->faker->email(),
     'body' => $this->faker->sentence(45),
     'approved' => $this->faker->boolean(),
     'likes' => $this->faker->randomNumber(5)
     ];
    } 
     
    FOR SUPERHEROES $table->id();
            $table->string('name',100);
            $table->string('realname',150);
            URL*/
        return [
            'name' => fake()->name(),
            'realname' => fake()->name(),

            'universe_id' => fake()->numberBetween(1,2),
            'genre_id' => fake()->numberBetween(1,3),
            'gender_id' => fake()->numberBetween(1,3),
            
            'imageUrl' => fake()->imageUrl(640, 480,'superheroes'),  // Random image URL
        ];
    }
}
