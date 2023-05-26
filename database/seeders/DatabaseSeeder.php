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
        \App\Models\Customer::factory()->count(10)->create();
        \App\Models\Account::factory()->count(17)->create();
        \App\Models\Card::factory()->count(17)->create();
        //\App\Models\FinancialDocumentFactory::factory()->count(0)->create();
        //\App\Models\TransactionFactory::factory()->count(0)->create();
        //\App\Models\ServiceChargeFactory::factory()->count(0)->create();
    }
}
