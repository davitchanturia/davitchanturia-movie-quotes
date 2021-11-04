<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
    
        return view('home', [
            'RandomMovie' => Movie::inRandomOrder()->first(),
            'films' => Movie::all()
        ]);
    }

    public function show(Movie $RandomMovie)
    {
        return view('list', [
            'RandomMovie' => $RandomMovie,
        ]);
    }
}
