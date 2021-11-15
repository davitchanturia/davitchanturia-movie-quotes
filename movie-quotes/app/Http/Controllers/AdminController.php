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
    // ფილმების დაშბორდი
    public function index()
    {
        return view('admin.movie.index', [
            'movie' => Movie::get()
        ]);
    }
    
    // ციტატების დაშბოროდი
    public function QuoteIndex()
    {
        return view('admin.quote.index', [
            'quote' => Quote::get()
        ]);
    }
    
    //ფილმის დასამატებელი ფორმა
    public function create()
    {
        return view('admin.movie.create');
    }

    // ციტატის დასამატებელი ფორმა
    public function QuoteCreate()
    {
        return view('admin.quote.create');
    }

    //ფილმის დამატება ბაზაში
    public function store(StoreMovieRequest $request)
    {
        $attributes = $request->validated();

        Movie::create($attributes);
        
        return redirect(route('admin.movies'));
    }

    //ციტატის დამატება ბაზაში
    public function StoreQuote(StoreQuoteRequest $request)
    {
        $attr = $request->validated();

        $attr['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Quote::create($attr);
        
        return redirect(route('admin.movies'));
    }

    //ფილმის წაშლა
    public function MovieDestroy(Movie $movie)
    {
        $movie->delete();
        
        $a = DB::table('quotes')->where('movie_id', $movie->id);

        $a->delete();
        

        return redirect(route('admin.movies'));
    }

    //ციტატის წაშლა
    public function QuoteDestroy(Quote $quote, Movie $movie)
    {
        $quote->delete();

        return redirect(route('admin.quotes'));
    }

    //ფილმის დაედითება
    public function MovieEdit(Movie $movie)
    {
        return view('admin.movie.edit', ['movie' => $movie]);
    }

    public function MovieUpdate(StoreMovieRequest $request, Movie $movie)
    {
        $attributes = $request->validated();

        $movie->update($attributes);
        
        
        return redirect(route('admin.movies'));
    }
}
