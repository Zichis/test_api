<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($mode = null)
    {
        $products = Product::all();
        $products = $products->load('tenors', 'currencies');

        if ($products) {
            return $this->sendResponse($products, 'List of Products.');
        }

        return $this->sendError('Unauthorised.', ['error' => 'Unauthorised'], 403);
    }
}
