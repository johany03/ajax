<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_product'=>$this->faker->name,
            'code' =>$this->faker->postcode,
            'dua_date' =>$this->faker->dateTime($max = 'now', $timezone = null),
            'quantity' =>$this->faker->randomDigit,
        ];
    }
}
