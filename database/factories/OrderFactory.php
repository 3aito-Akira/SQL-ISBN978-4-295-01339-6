<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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

        $date = fake()->date();
        $date = str_replace('-','',$date);

        $result = DB::select("select count(code) as count from orders");
        $count = $result[0]->count;
        $count = strval($count);

        $order_index = $date.$count;

        return [
            'date' => $date,
            'order_index' => $order_index,
            'order_branch' => fake()->numberBetween($min=1,$max=3),
            'code' => $code,
            'volume' => fake()->numberBetween($min=0,$max=9999),
            'discount' => fake()->numberBetween($min=0,$max=50),
        ];
    }
}
