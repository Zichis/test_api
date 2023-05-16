<?php

namespace App\Http\Controllers;

use App\Classes\CalculateInterest;
use App\Models\Currency;
use App\Models\InterestPaymentOption;
use App\Models\Product;
use App\Models\Tenor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrencyController extends Controller
{
    private $calculateInterest = null;

    public function __construct()
    {
        $this->calculateInterest = new CalculateInterest();
    }

    public function index()
    {
        $list = Currency::all();
        if ($list) {
            return $this->sendResponse($list, 'List of available Currencies.');
        }

        return $this->sendError('Unauthorised.', ['error' => 'Unauthorised'], 403);
    }
    
    public function calc(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'currency' => 'required|exists:currencies,id',
            'product' => 'required|exists:products,id',
            'tenor' => 'required|exists:tenors,id',
            'investment_amount' => 'required|required|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        // return $request;

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 400);
        }

        $rate = $this->calculateInterest->getRate($request['investment_amount'], $request['tenor'], $request['product'], $request['currency']);

        // dd($rate);
        if ($rate == null) {
            return $this->sendError('Invalid Rate', 'There is no interest rate for selected investment');
        }

        $interestPaymentoption = InterestPaymentOption::where('slug', 'maturity')->first();

        $rateInput = $rate->{$interestPaymentoption->slug};

        $tenor = Tenor::where('id', $request['tenor'])->first();

        $product = Product::where('id', $request['product'])->first();

        $interest = $this->calculateInterest->CalculateInterest($request['investment_amount'], $rateInput, $tenor->days);

        if ($product->slug === 'rosabon_treasury_note' || $product->slug === 'rosabon_currency_note') {
            $success = [
                // 'value_date' => $request['value_date'],
                // 'interest_rate' => $rateInput,
                // 'withholding_tax' => number_format($interest * 0.10, 2),
                'new_payment_at_maturity' => number_format($interest + $request['investment_amount'], 2),
            ];

            return $this->sendResponse($success, 'Investment successfully computed');
        } elseif ($product->slug === 'rosabon_win_big') {
            $success = [
                // 'value_date' => $request['value_date'],
                // 'interest_rate' => $rateInput,
                // 'withholding_tax' => number_format($interest * 0.10, 2),
                'new_payment_at_maturity' => number_format($interest + $request['investment_amount'], 2),
            ];

            return $this->sendResponse($success, 'Investment successfully computed');
        } elseif ($product->slug === 'rosabon_promissory_note') {
            $success = [
                // 'value_date' => $request['value_date'],
                // 'interest_rate' => $rateInput,
                // 'withholding_tax' => number_format($interest * 0.10, 2),
                'new_payment_at_maturity' => number_format($interest + $request['investment_amount'], 2),
            ];

            return $this->sendResponse($success, 'Investment successfully computed');
        } elseif ($product->slug === 'rosabon_earning_plan') {
            // return $rate;
            $success = [
                // 'value_date' => $request['value_date'],
                // 'interest_rate' => $rateInput,
                // 'withholding_tax' => number_format($interest * 0.10, 2),
                'new_payment_at_maturity' => number_format($interest + $request['investment_amount'], 2),
            ];

            return $this->sendResponse($success, 'Investment successfully computed');
        }
    }
}
