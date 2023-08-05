<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $account_id = fake()->numberBetween($min=0,$max=9999999);
        return [
            'name' =>  fake()->name(40),
            'kind' =>  fake()->numberBetween($min=1,$max=3),
            'balance' =>  fake()->numberBetween($min=1,$max=99999999),
            'date' =>  fake()->date(),
            'account_id' => str_pad($account_id, 7, 0, STR_PAD_LEFT),
        ];
    }
}
