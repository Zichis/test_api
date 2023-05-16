<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 2, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 3, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 4, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7],

            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 2, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8.5],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 3, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8.5],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 4, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8.5],

            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 2, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 3, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 4, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10],

            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 2, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.5],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 3, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.5],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 4, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.5],

            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 2, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 3, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13],
            ['product_id' => 2, 'tenor_id' => 3, 'currency_id' => 4, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13],

            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 2, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 3, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 4, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 7.5],

            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 2, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 3, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 4, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9],

            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 2, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 3, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 4, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.5],

            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 2, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 3, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 4, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12],

            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 2, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 3, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.5],
            ['product_id' => 2, 'tenor_id' => 5, 'currency_id' => 4, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.5],

            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 2, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 3, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 4, 'minimum_amount' => 500, 'maximum_amount' => 999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8],

            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 2, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9.5],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 3, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9.5],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 4, 'minimum_amount' => 1000, 'maximum_amount' => 4999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9.5],

            //   5000- 9,999
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 2, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.90],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 3, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.20],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 4, 'minimum_amount' => 5000, 'maximum_amount' => 9999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.43],

            //   10,000 - 49,999.99 //
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 2, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.5],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 3, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.5],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 4, 'minimum_amount' => 10000, 'maximum_amount' => 49999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.5],

            //   50,000 - // ****
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 2, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.32],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 3, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.23],
            ['product_id' => 2, 'tenor_id' => 7, 'currency_id' => 4, 'minimum_amount' => 50000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.45], //Added stuff here 0

            //  //TN 50,000- 999,999.99 all
            ['product_id' => 1, 'tenor_id' => 3, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.98],
            ['product_id' => 1, 'tenor_id' => 3, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.75],
            ['product_id' => 1, 'tenor_id' => 3, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.75],

            //TN  50,000- 999,999.99 all
            ['product_id' => 1, 'tenor_id' => 4, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.75],
            ['product_id' => 1, 'tenor_id' => 4, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.75],
            ['product_id' => 1, 'tenor_id' => 4, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.50],

            //TN  50,000- 999,999.99 all
            ['product_id' => 1, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.50],
            ['product_id' => 1, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.50],
            ['product_id' => 1, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99,  'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 15.25],

            //TN  50,000- 999,999.99 all
            ['product_id' => 1, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.25],
            ['product_id' => 1, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.25],
            ['product_id' => 1, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 16.00],

            //10,000,000.00 - 19,999,999.99
            // ['product_id'=>1, 'tenor_id'=>1, 'currency_id'=>1, 'minimum_amount'=>5000000.00, 'maximum_amount' => 9999999.99, 'upfront' => 8.25, 'maturity' => 8.50, 'officer_max_rate' => 9.20],
            // Added stuff here1

            //PN  50,000- 999,999.99 all
            ['product_id' => 4, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8.89],
            ['product_id' => 4, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9.75],
            ['product_id' => 4, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.75],

            //PN  50,000- 999,999.99 all
            ['product_id' => 4, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 8.75],
            ['product_id' => 4, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.75],
            ['product_id' => 4, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.50],

            //PN  50,000- 999,999.99 all
            ['product_id' => 4, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 9.5],
            ['product_id' => 4, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.5],
            ['product_id' => 4, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.25],

            //PN  50,000- 999,999.99 all
            ['product_id' => 4, 'tenor_id' => 10, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.25],
            ['product_id' => 4, 'tenor_id' => 10, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.25],
            ['product_id' => 4, 'tenor_id' => 10, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 100000000.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.89],

            //PN  50,000- 999,999.99 all
            ['product_id' => 4, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 50000, 'maximum_amount' => 999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.25],
            ['product_id' => 4, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 1000000, 'maximum_amount' => 9999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.25],
            ['product_id' => 4, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 10000000, 'maximum_amount' => 9999999999999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.34],
            //Added stuff here2

            //EAP  5,000- 99,999.99 all
            ['product_id' => 5, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 5000, 'maximum_amount' => 99999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 10.50],
            ['product_id' => 5, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 100000, 'maximum_amount' => 149999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.23],
            ['product_id' => 5, 'tenor_id' => 5, 'currency_id' => 1, 'minimum_amount' => 150000, 'maximum_amount' => 1000000, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.5],

            //EAP  5,000- 99,999.99 all
            ['product_id' => 5, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 5000, 'maximum_amount' => 99999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 11.50],
            ['product_id' => 5, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 100000, 'maximum_amount' => 149999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12],
            ['product_id' => 5, 'tenor_id' => 7, 'currency_id' => 1, 'minimum_amount' => 150000, 'maximum_amount' => 1000000, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 12.5],

            //EAP  5,000- 99,999.99 all
            ['product_id' => 5, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 5000, 'maximum_amount' => 99999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.9],
            ['product_id' => 5, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 100000, 'maximum_amount' => 149999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.5],
            ['product_id' => 5, 'tenor_id' => 9, 'currency_id' => 1, 'minimum_amount' => 150000, 'maximum_amount' => 1000000, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.8],

            //EAP  5,000- 99,999.99 all
            ['product_id' => 5, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 5000, 'maximum_amount' => 99999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 13.50],
            ['product_id' => 5, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 100000, 'maximum_amount' => 149999.99, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.9],
            ['product_id' => 5, 'tenor_id' => 11, 'currency_id' => 1, 'minimum_amount' => 150000, 'maximum_amount' => 1000000, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 14.5],
            //RWIN
            ['product_id' => 3, 'tenor_id' => 1, 'currency_id' => 1, 'minimum_amount' => 20000, 'maximum_amount' => 99999999.00, 'upfront' => 8.50, 'maturity' => 9.00, 'officer_max_rate' => 2.9],
        ];

        \DB::table('rates')->insert($data);
    }
}
