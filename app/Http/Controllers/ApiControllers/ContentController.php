<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\Quote;

class ContentController extends Controller
{
	public function index()
	{
		// $movieCount = Movie::all()->count() > 0;
		// $quoteCount = Quote::all()->count() > 0;

		if (!Movie::all()->count() > 0 || !Quote::all()->count() > 0)
		{
			return response()->json(['message' => 'No data in Database, try another time'], 403);
		}

		$movie = Movie::inRandomOrder()->whith('quote')->withCount('quote')->first();

		while ($movie->quote_count == 0)
		{
			$movie = Movie::inRandomOrder()->withCount('quote')->first();
		}

		$quote = $movie->quote->random();

		$allMovieQuotes = $movie->quote;

		return response()->json([
			'movie'     => $movie,
			'quote'     => $quote,
			'allQuotes' => $allMovieQuotes,
		]);
	}

	public function allData()
	{
		$allMovies = Movie::all();
		$quotes = Quote::with('movie')->get();

		return response()->json(['allMovies' => $allMovies, 'quotes'    => $quotes]);
	}
}
