<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'category_id' => 1,
                'display_name' => 'Rosabon Treasury Note',
                'abbreviation' => 'RTN',
                'title' => 'Rosabon Treasury Note',
                'slug' => 'rosabon_treasury_note',
                'status' => 1,
                'tenors' => [3, 4, 5, 7],
                'currencies' => [1],
                'properties' => [5, 9, 10],
                'banks' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                'interest_payment_options' => [1, 2],
            ],
            [
                'category_id' => 1,
                'display_name' => 'Rosabon Currency Note',
                'abbreviation' => 'RCN',
                'title' => 'Rosabon Currency Note',
                'slug' => 'rosabon_currency_note',
                'status' => 1,
                'tenors' => [3, 4, 5, 7],
                'banks' => [13, 14, 15, 16, 17, 18, 19, 20],
                'currencies' => [2,3,4],

                'properties' => [5],
                'interest_payment_options' => [1, 2],
            ],
            [
                'category_id' => 3,
                'display_name' => 'Rosabon Win Big',
                'abbreviation' => 'RWIN',
                'title' => 'Rosabon Win Big',
                'slug' => 'rosabon_win_big',
                'status' => 1,
                'tenors' => [1],
                'currencies' => [1],
                'banks' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

                'properties' => [5, 9, 10],
                'interest_payment_options' => [1, 2],
            ],
            [
                'category_id' => 3,
                'display_name' => 'Rosabon Promissory Note',
                'abbreviation' => 'RPN',
                'title' => 'Rosabon Promissory Note',
                'slug' => 'rosabon_promissory_note',
                'status' => 1,
                'tenors' => [5, 6, 8, 9, 11],
                'currencies' => [1],
                'properties' => [5],
                'banks' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

                'interest_payment_options' => [3, 4, 5, 6, 7],
            ],
            [
                'category_id' => 2,
                'display_name' => 'Rosabon Earning Plan',
                'abbreviation' => 'REAP',
                'title' => 'Rosabon Earning Plan',
                'slug' => 'rosabon_earning_plan',
                'status' => 1,
                'tenors' => [5, 6, 8, 9, 11],
                'currencies' => [1],
                'properties' => [5, 9, 10],
                'banks' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                'interest_payment_options' => [1, 2],
            ],
        ];

        foreach ($products as $value) {
            $product = new Product();
            $product->category_id = $value['category_id'];
            $product->display_name = $value['display_name'];
            $product->title = $value['title'];
            $product->abbreviation = $value['abbreviation'];
            $product->slug = $value['slug'];
            $product->status = $value['status'];
            $product->save();

            $product->tenors()->attach($value['tenors']);
            $product->currencies()->attach($value['currencies']);
            // $product->properties()->attach($value['properties']);
            // $product->bankAccounts()->attach($value['banks']);
            // $product->interestPaymentOptions()->attach($value['interest_payment_options']);
        }
    }
}
