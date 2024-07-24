<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lodging>
 */
class LodgingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake(),
            'description'=>fake()->sentence(10),
            'price'=>fake()->randomDigitNot(0),
            'image'=>fake()->imageUrl(640, 480, 'lodgings', true),
            'user_id'=> User::factory(),
            'category_id'=> Category::factory()
        ];
    }
}
