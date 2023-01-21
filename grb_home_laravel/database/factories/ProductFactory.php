<?php

namespace Database\Factories;

use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->numerify('sample product ###'),
            'product_details' => $this->faker->text(),
            'product_price' => $this->faker->numerify(),
            'product_category' => $this->faker->randomDigitNot(0),

            'product_stock' => $this->faker->randomNumber($nbDigit = 3),
            'product_image' => 'no_image.jpg',

        ];
    }
}
