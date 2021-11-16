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
        // dd(request('change_language'));
        // if (in_array(request('change_language'), Config::get('app.available_locales'))) {
        //     Session::put('applocale', request('change_language'));
        // }
        
        return view('home', [
            'RandomMovie' => Movie::inRandomOrder()->first(),
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
