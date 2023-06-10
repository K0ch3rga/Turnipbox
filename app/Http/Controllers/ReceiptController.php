<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ReceiptController extends Controller
{
    function index() {
        $products = new Product;
        return view('Receipt', ['products'=>$products->all()]);
    }

    function save($receipt) {

    }
}
