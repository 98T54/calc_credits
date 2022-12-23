<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Lecture;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function index(Review $review, Lecture $lecture){
        
        return view('reviews/index')->with(['lectures' => $lecture->get(), 'reviews' => $review->getPagenateByLimit()]);
        
    }
    
    public function store(ReviewRequest $request, Review $review){
        
        
        $input = $request['review'];
        
        $review->fill($input)->save();
       
        return redirect('/review');
        
    }
}
