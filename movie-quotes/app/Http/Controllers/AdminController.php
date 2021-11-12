<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'movie' => Movie::get()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(StoreMovieRequest $request)
    {
        $attributes = $request->validated();

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Movie::create($attributes);
        
        return redirect('/');
    }


    
    // protected function ValidateMovie(?Movie $movie = null): array
    // {
    //     $movie = new Movie();

    //     $attributes = request()->validate([
    //         'name.en' => ['required'],
    //         'name.ka' => ['required'],
    //         'thumbnail'      => $movie->exists() ? ['image'] : ['required', 'image'],
    //         'slug'           => ['required', Rule::unique('movies', 'slug')->ignore($movie->id)],
    //     ]);

    //     return $attributes;
    // }
}
