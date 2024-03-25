<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_producer_id' => User::where('role_id', 3)->inRandomOrder()->first()->id, // Suponiendo que el rol 3 es 'Producer'
            'name' => $this->faker->sentence(3), // Título del producto
            'description' => $this->faker->paragraph, // Descripción del producto
            'best_before' => "Consumir antes de " . $this->faker->numberBetween(1, 30) . " días",
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100), // Cantidad del producto
            'location' => $this->faker->city,
            'main_image' => $this->faker->imageUrl(640, 480, 'foods'), // Imagen del producto
            'status' => $this->faker->randomElement(['Available', 'Unavailable']),
        ];
    }
}
