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
		$quotes = Quote::with('movie')->get();
		$allMovieQuotes = Quote::where('movie_id', $movie->id)->with('movie')->get();
		$allMovies = Movie::all();

		return [
			'movie'     => $movie,
			'quote'     => $quote,
			'quotes'    => $quotes,
			'allQuotes' => $allMovieQuotes,
			'allMovies' => $allMovies,
		];
	}
}
