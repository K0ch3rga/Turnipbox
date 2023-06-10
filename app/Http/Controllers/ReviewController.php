<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function index()
    {
        $products = new Product;
        return view('review', ['products'=>$products->all()]);
    }

    function review_check(Request $request) {
        $valid = $request -> validate([
            'product' => 'required',
            'text'=>'max:128',
            'stars' => 'required',
            'name'=>'required',
        ]);

        $review = new Review();
        $review->product = $request->input('product');
        $review->text = $request->input('text');
        $review->stars = $request->input('stars');
        $review->name = $request->input('name');

        $review->save();

        return redirect()->route('product', ['id', $request->product]);
    }
}
