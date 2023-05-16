<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            #1
            ['display_name' => '30 DAYS or 1 Months', 'slug' => '30_days', 'description' => '30 DAYS or 1 Months', 'days' => 30, 'months' => 1, 'years' => 0],
            #2
            ['display_name' => '60 DAYS or 2 Months', 'slug' => '60_days', 'description' => '60 DAYS or 2 Months', 'days' => 60, 'months' => 2, 'years' => 0],
            #3
            ['display_name' => '90 DAYS or 3 Months', 'slug' => '90_days', 'description' => '90 DAYS or 3 Months', 'days' => 90, 'months' => 3, 'years' => 0],
            #4
            ['display_name' => '120 DAYS or 4 Months', 'slug' => '120_days', 'description' => '120 DAYS or 4 Months', 'days' => 120, 'months' => 4, 'years' => 0],
            #5
            ['display_name' => '180 DAYS or 6 Months', 'slug' => '180_days', 'description' => '180 DAYS or 6 Months', 'days' => 180, 'months' => 6, 'years' => 0],
            #6
            ['display_name' => '360 DAYS or 12 Months', 'slug' => '360_days', 'description' => '360 DAYS or 12 Months', 'days' => 360, 'months' => 12, 'years' => 1],
            #7
            ['display_name' => '365 DAYS or 12 Months', 'slug' => '365_days', 'description' => '365 DAYS or 12 Months', 'days' => 365, 'months' => 12, 'years' => 1],
            #8
            ['display_name' => '720 DAYS or 24 Months', 'slug' => '720_days', 'description' => '720 DAYS or 24 Months', 'days' => 720, 'months' => 24, 'years' => 2],
            #9
            ['display_name' => '1080 DAYS or 36 Months', 'slug' => '1080_days', 'description' => '1080 DAYS or 36 Months', 'days' => 1080, 'months' => 36, 'years' => 3],
            #10
            ['display_name' => '1440 DAYS or 48 Months', 'slug' => '1440_days', 'description' => '1440 DAYS or 48 Months', 'days' => 1440, 'months' => 48, 'years' => 4],
            #11
            ['display_name' => '1800 DAYS or 60 Months', 'slug' => '1880_days', 'description' => '1800 DAYS or 60 Months', 'days' => 1880, 'months' => 60, 'years' => 5],
        ];

        \DB::table('tenors')->insert($data);
    }
}
