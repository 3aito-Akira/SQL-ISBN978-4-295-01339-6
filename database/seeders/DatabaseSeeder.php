<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Account::factory(20)->create();
        //\App\Models\AbolishedAccount::factory(10)->create();
        //\App\Models\Transaction::factory(20)->create();

        \App\Models\Good::factory(1)->create();
        \App\Models\AbolishedGood::factory(1)->create();
        \App\Models\Order::factory(1)->create();
    }
}
