<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $id = 1;
        $accountNum = fake()->numberBetween($min=0,$max=9999999);
        $response = DB::select("select cause_id from causes");
        return [
            'cause_id' => fake()->numberBetween($min=1,$max=9),
            'date' => fake()->date(),
            'accountNum' => str_pad($accountNum, 7, 0, STR_PAD_LEFT),
            'deposit' => fake()->numberBetween($min=1,$max=999999),
            'withdrawal' => fake()->numberBetween($min=1,$max=999999),
            'id' => $id++,
        ];
    }
}
