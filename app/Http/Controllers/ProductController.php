<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function view($id, $url = '')
    {
        $product = Product::findOrFail($id);

        return view('product.view')
            ->withProduct($product);
    }
}
