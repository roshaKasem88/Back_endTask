<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name:$this->faker->text(25);
        return [
            'name'=$name,
            'image'=>$this->faker->imageUrl($width=140,$height=300),
            
        ];
    }
}
