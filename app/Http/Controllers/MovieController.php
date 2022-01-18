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
            $rand = Movie::inRandomOrder()->first(),
            'RandomMovie' => $rand,
            'films' => Movie::all(),
            'relQuote' => $rand->quote->random()  // ამ ცვლადში ვაქცევთ რენდომად წამოღებული ფილმის რენდომ ციტატას რო ბლეიდში ერთი ფილმის ორი ციტატის მონაცემები არ აირიოს ერთმანეთში
            
        ])->with('quote');
    }


    public function show(Movie $RandomMovie)
    {
        return view('list', [
            'RandomMovie' => $RandomMovie,
        ]);
    }
}
