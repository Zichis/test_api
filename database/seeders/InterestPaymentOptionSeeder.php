<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestPaymentOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['display_name' => 'Interest Upfront', 'slug' => 'upfront', 'description' => 'Interest Upfront', 'status' => 1],
            ['display_name' => 'Interest At Maturity', 'slug' => 'maturity', 'description' => 'Interest At Maturity', 'status' => 1],
            ['display_name' => 'Interest Payment: Monthly', 'slug' => 'monthly', 'description' => 'Interest Payment: Monthly', 'status' => 1],
            ['display_name' => 'Interest Payment: Bi-Monthly', 'slug' => 'bi-monthly', 'description' => 'Interest Payment: Bi-Monthly', 'status' => 1],
            ['display_name' => 'Interest Payment: Quarterly', 'slug' => 'quarterly', 'description' => 'Interest Payment: Quarterly', 'status' => 1],
            ['display_name' => 'Interest Payment: Semi-Annually', 'slug' => 'semi-annually', 'description' => 'Interest Payment: Semi-Annually', 'status' => 1],
            ['display_name' => 'Interest Payment: Yearly', 'slug' => 'yearly', 'description' => 'Interest Payment: Yearly', 'status' => 1],
        ];

        \DB::table('interest_payment_options')->insert($data);
    }
}
