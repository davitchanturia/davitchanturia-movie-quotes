<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRequests\StoreMovieRequest;

class MovieController extends Controller
{
	public function create(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		$name = ['en' => $attributes['englishName'], 'ka' => $attributes['georgianName']];

		$updatedData = ['name' => $name, 'slug' => $attributes['slug']];

		Movie::create($updatedData);

		return response(200);
	}
}
