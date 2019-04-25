<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::findOrFail($id);

        // add to cart
    }
}
