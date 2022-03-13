<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRequests\EditQuoteRequest;
use App\Http\Requests\ApiRequests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function create(StoreQuoteRequest $request)
	{
		$attributes = $request->validated();

		$name = ['en' => $attributes['englishName'], 'ka' => $attributes['georgianName']];

		$movie = Movie::where('name->en', $attributes['relevantMovie'])->first();

		// save in storage
		$attributes['thumbnail'] = $attributes['thumbnail']->store('thumbnails');

		$thumbnail = $request->file('thumbnail')->getClientOriginalName();

		$updatedData = ['name' => $name, 'thumbnail' => 'thumbnails/' . $thumbnail, 'movie_id' => $movie->id];

		Quote::create($updatedData);

		return response(200);
	}

	public function edit(EditQuoteRequest $request)
	{
		$attributes = $request->validated();

		// certain quote
		$quote = Quote::where('id', $attributes['id'])->first();

		$name = ['en' => $attributes['englishName'], 'ka' => $attributes['georgianName']];

		$relevantMovie = Movie::where('name->en', $attributes['relevantMovie'])->first();

		// save in storage
		$attributes['thumbnail'] = $attributes['thumbnail']->store('thumbnails');

		$thumbnail = $request->file('thumbnail')->getClientOriginalName();

		$updatedData = ['name' => $name, 'thumbnail' => 'thumbnails/' . $thumbnail, 'movie_id' => $relevantMovie->id];

		$quote->update($updatedData);

		return response(200);
	}

	public function delete($id)
	{
		$quote = Quote::where('id', $id)->first();

		$quote->delete();

		return response(200);
	}
}
