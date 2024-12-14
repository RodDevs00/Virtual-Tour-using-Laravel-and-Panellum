<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
// Store a new review
public function store(Request $request)
{
    $request->validate([
        'destination' => 'required|string|max:255',
        'rating' => 'required|integer|between:1,5',
        'review' => 'required|string|max:1000',
    ]);

    try {
        Review::create([
            'user_id' => Auth::id(),
            'destination' => $request->destination,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
        return response()->json(['message' => 'Review submitted successfully!'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Failed to submit review. Please try again later.'], 500);
    }
}


    // Retrieve reviews for a specific destination
    public function index($destination)
    {
        $reviews = Review::where('destination', $destination)->with('user')->get();
        return response()->json($reviews);
    }
    
}

