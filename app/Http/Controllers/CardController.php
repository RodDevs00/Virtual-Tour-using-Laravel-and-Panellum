<?php
namespace App\Http\Controllers;

use App\Models\Review;

class CardController extends Controller
{
    public function getCards()
    {
        // Static list of destinations (this could be dynamic if you have a destinations table)
        $destinations = [
            ['title' => 'San Juanico Bridge', 'iframe_src' => 'https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/lascar.jpg&autoLoad=true'],
            ['title' => 'Leyte Landing', 'iframe_src' => 'https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/example.jpg&autoLoad=true'],
        ];

        // Map through the destinations to fetch ratings dynamically
        $cards = array_map(function ($destination) {
            return [
                'title' => $destination['title'],
                'iframe_src' => $destination['iframe_src'],
                'ratings' => Review::where('destination', $destination['title'])->avg('rating') ?? 0,
                'rating_count' => Review::where('destination', $destination['title'])->count(),
            ];
        }, $destinations);

        return response()->json($cards);
    }
}
