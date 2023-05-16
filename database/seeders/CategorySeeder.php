<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['display_name' => "Fixed Deposit", 'slug' => 'fixed_savings', 'description' => "Fixed Savings", 'status' => 1],
            ['display_name' => 'Target Savings', 'slug' => 'target_savings', 'description' => 'Target Savings', 'status' => 1],
            ['display_name' => "Target Income", 'slug' => 'target_income', 'description' => "Target Income", 'status' => 1],
            ['display_name' => 'Cash Backed Loans', 'slug' => 'cash_backed_loans', 'description' => 'Cashed Backed Loans', 'status' => 1],
        ];

        \DB::table('categories')->insert($data);
    }
}
