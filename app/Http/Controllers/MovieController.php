<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\App;

class MovieController extends Controller
{
	public function index()
	{
		return view('home', [
			$rand = Movie::inRandomOrder()->first(),
			'RandomMovie' => $rand,
			'films'       => Movie::all(),
			'relQuote'    => $rand->quote->random(),  // random quote for certain movie
			'local'       => App::getLocale(),
		])->with('quote');
	}

	public function show(Movie $RandomMovie)
	{
		return view('list', [
			'RandomMovie' => $RandomMovie,
			'local'       => App::getLocale(),
		]);
	}
}
