<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        return view('Product');
    }

    function show($ean) {
        $product = Product::find($ean);
        return view('');
    }
}
