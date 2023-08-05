<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AbolishedAccount>
 */
class AbolishedAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $accountNum = fake()->numberBetween($min=0,$max=9999999);
        return [
            'name' =>  fake()->name(40),
            'kind' =>  fake()->numberBetween($min=1,$max=3),
            'balance' =>  fake()->numberBetween($min=1,$max=99999999),
            'date' =>  fake()->date(),
            'account_id' => str_pad($accountNum, 7, 0, STR_PAD_LEFT),
        ];
    }
}
