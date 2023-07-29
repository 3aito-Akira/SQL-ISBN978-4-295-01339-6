<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //AccountTest
        //\App\Models\AccountTest::factory(5)->create();

        /*
        $accountNum = fake()->numberBetween($min=0,$max=9999999);
        \App\Models\User::factory()->create([
            'name' => fake()->name(40),
            'kind' => fake()->numberBetween($min=1,$max=3),
            'balance' => fake()->numberBetween($min=1,$max=99999999),
            'date' => fake()->date(),
            'accountNum' => str_pad($accountNum, 7, 0, STR_PAD_LEFT),
        ]);
        */

        \App\Models\AbolishedAccountModel::factory()->count(5)->create();
    }
}
