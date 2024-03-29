<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie', compact('movies'));
    }
    public function show(Movie $movie)
    {
        return view('movie_description', compact('movie'));
    }
}
