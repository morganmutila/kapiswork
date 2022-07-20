<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Tag;
use Illuminate\Http\Request;
;

class ListingController extends Controller
{

    public function index(Request $request)
    {
        $listings = Listing::where('is_active', true)
                    ->with(['tags', 'user'])
                    ->latest()
                    ->get();
        $tags = Tag::orderby('name')
                ->get();
        return view('listings.index', compact('listings', 'tags'));
    }
}
