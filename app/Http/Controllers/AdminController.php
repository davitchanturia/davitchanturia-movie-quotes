<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.movie.index', [
            'movie' => Movie::get()
        ]);
    }
    
    public function QuoteIndex()
    {
        return view('admin.quote.index', [
            'quote' => Quote::get()
        ]);
    }
    
    public function create()
    {
        return view('admin.movie.create');
    }

    public function QuoteCreate()
    {
        return view('admin.quote.create');
    }

    public function store(StoreMovieRequest $request)
    {
        $attributes = $request->validated();

        Movie::create($attributes);
        
        return redirect(route('admin.movies'));
    }

    public function StoreQuote(StoreQuoteRequest $request)
    {
        $attr = $request->validated();

        $attr['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Quote::create($attr);
        
        return redirect(route('admin.quotes'));
    }

    public function MovieDestroy(Movie $movie)
    {
        $movie->delete();
        
        $quote = DB::table('quotes')->where('movie_id', $movie->id);

        $quote->delete();
        

        return redirect(route('admin.movies'));
    }

    public function QuoteDestroy(Quote $quote)
    {
        $quote->delete();

        return redirect(route('admin.quotes'));
    }

    public function MovieEdit(Movie $movie)
    {
        return view('admin.movie.edit', ['movie' => $movie]);
    }

    public function QuoteEdit(Quote $quote)
    {
        return view('admin.quote.edit', ['quote' => $quote]);
    }

    public function MovieUpdate(StoreMovieRequest $request, Movie $movie)
    {
        $attributes = $request->validated();

        $movie->update($attributes);
        
        
        return redirect(route('admin.movies'));
    }

    public function QuoteUpdate(StoreQuoteRequest $request, Quote $quote)
    {
        // dd('sadads');
        $attrs = $request->validated();

        if (isset($attrs['thumbnail'])) {
            $attrs['thumbnail'] = request()->file('thumbnail')->store('public/thumbnails');
        }

        $quote->update($attrs);
        
        
        return redirect(route('admin.quotes'));
    }
}