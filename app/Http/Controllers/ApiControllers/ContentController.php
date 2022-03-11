<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\Quote;

class ContentController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();
		$quote = $movie->quote->random();
		$allMovieQuotes = Quote::where('movie_id', $movie->id)->with('movie')->get();

		return [
			'movie'     => $movie,
			'quote'     => $quote,
			'allQuotes' => $allMovieQuotes,
		];
	}

	public function allData()
	{
		$allMovies = Movie::all();
		$quotes = Quote::with('movie')->get();

		return response()->json(['allMovies' => $allMovies, 'quotes'    => $quotes]);
	}
}
