<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $abc = Movie::inRandomOrder()->first();
        // ddd($abc);
        return view('home', [
            'RandomMovie' => $abc,
            'films' => Movie::all()
            
        ])->with('quote');
    }


    public function show(Movie $RandomMovie)
    {
        return view('list', [
            'RandomMovie' => $RandomMovie,
        ]);
    }
}
