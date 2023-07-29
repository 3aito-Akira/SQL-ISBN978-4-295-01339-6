<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountTest>
 */
class AccountTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $accountNum = $this->fake()->numberBetween($min=0,$max=9999999);
        return [
            'name' =>  $this->fake()->name(40),
            'kind' =>  $this->fake()->numberBetween($min=1,$max=3),
            'balance' =>  $this->fake()->numberBetween($min=1,$max=99999999),
            'date' =>  $this->fake()->date(),
            'accountNum' => str_pad($accountNum, 7, 0, STR_PAD_LEFT),
        ];
    }
}
