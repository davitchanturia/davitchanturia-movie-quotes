<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

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
}
