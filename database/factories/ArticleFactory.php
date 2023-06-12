<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition() {
    return [
      'title' => $this->faker->sentence(),
      'image' => $this->faker->imageUrl(),
      'extract' => $this->faker->text(),
      'body' => $this->faker->text(2000),
    ];
  }
}