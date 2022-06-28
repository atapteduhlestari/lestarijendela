<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'category_id' => 1,
            'sub_category_id' => 1,
            'slug' => $this->faker->slug(2, false),
            'deskripsi' => $this->faker->paragraphs(),
            'spesifikasi' => $this->faker->paragraphs(),
        ];
    }
}
