<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function index() {
        return view('Review');
    }

    function review_check(Request $request) {
        $valid = $request -> validate([
            'product' => 'required',
            'text'=>'max:128',
            'stars' => 'required',
            'name'=>'required',
        ]);

        $review = new Review();
        $review->ean = $request->input('');
        $review->text = $request->input('');

        $review->save();
        return redirect('info', ['ean' => $review->ean]);
    }
}
