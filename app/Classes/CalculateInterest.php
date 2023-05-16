<?php

namespace App\Classes;

use App\Models\Rate;

class CalculateInterest
{
    public function getRate($investmentAmount, $tenor, $product, $currency)
    {
        //get rate
        $rate = Rate::where('product_id', $product)
            ->where('tenor_id', $tenor)
            ->where('currency_id', $currency)
            ->where('maximum_amount', '>=', $investmentAmount)
            ->where('minimum_amount', '<=', $investmentAmount)
            ->first();

        return $rate;
    }

    public function calculateInterest($principle, $rate, $days)
    {
        // dd($principle.'-'.$rate.'-'.$days);
        $interest = $principle * ($rate / 100) * ($days / 365);

        return $interest;
    }
}
