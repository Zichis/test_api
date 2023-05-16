<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['display_name' => 'Nigerian Naira (NGN)', 'symbol' => '₦', 'slug' => 'nigerian_naira', 'description' => 'Nigerian Naira (NGN)', 'status' => 1],
            ['display_name' => 'British Pound (GBP)', 'symbol' => '£', 'slug' => 'british_pound', 'description' => 'British Pound (GBP)', 'status' => 1],
            ['display_name' => 'American Dollar (USD)', 'symbol' => '$', 'slug' => 'american_dollar', 'description' => 'American Dollar (USD)', 'status' => 1],
            ['display_name' => 'Euro (EUR)', 'slug' => 'euro', 'symbol' => '€', 'description' => 'Euro (EUR)', 'status' => 1],
        ];

        \DB::table('currencies')->insert($data);
    }
}
