<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRequests\editMovieRequest;
use App\Http\Requests\ApiRequests\StoreMovieRequest;

class MovieController extends Controller
{
	public function create(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		//check if movie exists
		$exists = Movie::where('name->en', $attributes['englishName'])->orWhere('name->ka', $attributes['georgianName'])->exists();

		if ($exists)
		{
			return response()->json(['status' => '409', 'message' => 'This data already exists!']);
		}

		$name = ['en' => $attributes['englishName'], 'ka' => $attributes['georgianName']];

		$updatedData = ['name' => $name, 'slug' => $attributes['slug']];

		Movie::create($updatedData);

		return response(200);
	}

	public function edit(editMovieRequest $request)
	{
		$attributes = $request->validated();

		$movie = Movie::where('id', $attributes['id'])->first();

		$name = ['en' => $attributes['englishName'], 'ka' => $attributes['georgianName']];

		$updatedData = ['name' => $name, 'slug' => $attributes['slug']];

		$movie->update($updatedData);

		return response(200);
	}

	public function delete($id)
	{
		$movie = Movie::where('id', $id)->first();

		$movie->delete();

		return response(200);
	}
}
