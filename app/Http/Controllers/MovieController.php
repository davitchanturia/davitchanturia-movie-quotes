<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{
    public function index()
    {
        return view('home', [
            $rand = Movie::inRandomOrder()->first(),
            'RandomMovie' => $rand,
            'films' => Movie::all(),
            'relQuote' => $rand->quote->random()  // random quote for certain movie
            
        ])->with('quote');
    }


    public function show(Movie $RandomMovie)
    {
        return view('list', [
            'RandomMovie' => $RandomMovie,
        ]);
    }
}
