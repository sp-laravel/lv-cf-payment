<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition() {
    return [
      'title' => $this->faker->words(3, true),
      'image' => $this->faker->imageUrl(),
      'description' => $this->faker->text(),
      'price' => $this->faker->randomElement([19, 49, 99, 199]),
    ];
  }
}