<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        $products = new Product;
        return view('Product', ['products' => $products->all()]);
    }

    function show($id) {
        $product = Product::find($id);
        return view('Item', ['product' => $product]);
    }

    function update($product){
        $reference = Product::find($product->id);
        $reference->ean = $product->ean;
        $reference->name = $product->name;
        $reference->manufacturer = $product->manufacturer;
        $reference->massvalue = $product->massvalue;
        $reference->masstype = $product->masstype;
        $reference->type = $product->type;
        $reference->tags = $product->tags;
        $reference->edit = $product->edit;
        $product->save();
    }
}
