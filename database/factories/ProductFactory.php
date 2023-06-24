<?php

namespace Database\Factories;

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
            'id' => 1,
            'ean' => 0,
            'name' => 'Debagium',
            'manufacturer' => 'Me Inc.',
            'massvalue' => 100,
            'masstype' => 'кг',
            'type' => 'Шоколад',
            'tags' => '1'
        ];
    }
}
