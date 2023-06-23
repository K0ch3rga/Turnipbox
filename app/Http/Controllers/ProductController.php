<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Review;

class ProductController extends Controller
{
    function index() {
        $products = new Product;
        $reviews = new Review;
        return view('Product', [
            'products' => $products->all(),
            'reviews' => $reviews->all(),
        ]);
    }

    function show($id) {
        $product = Product::find($id);
        return view('Item', ['product' => $product]);
    }
}
