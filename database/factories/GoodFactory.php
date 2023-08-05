<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Good>
 */
class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code1 = Str::random(1);
        $code1 = strtolower($code1);
        $code2 = fake()->randomNumber(4, true);
        $code = $code1.$code2;
        
        $kind = fake()->numberBetween($min=1,$max=4);
        $kind = strval($kind);
 
        $relation1 = Str::random(1);
        $relation1 = strtolower($relation1);
        $relation2 = fake()->randomNumber(4, true);
        $relation = $relation1.$relation2;

        return [
            'code' => $code,
            'name' => fake()->name(50),
            'price' => fake()->numberBetween($min=0,$max=9999),
            'kind' => $kind,
            'relation' => $relation,
        ];
    }
}
