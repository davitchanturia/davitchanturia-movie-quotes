<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
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

    public function QuoteCreate()
    {
        return view('admin.QuoteCreate');
    }

    public function store(StoreMovieRequest $request)
    {
        $attributes = $request->validated();

        Movie::create($attributes);
        
        return redirect('/admin/movie');
    }

    public function StoreQuote(StoreQuoteRequest $request)
    {
        $attr = $request->validated();

        $attr['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Quote::create($attr);
        
        return redirect('/admin/movie');
    }

    public function MovieDestroy(Movie $movie)
    {
        // dd($movie);
        // $movie->delete();

        // dd($movie);
        Quote::all()->where('movie_id', $movie->id)->delete();

        return redirect('/admin/movie');
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
