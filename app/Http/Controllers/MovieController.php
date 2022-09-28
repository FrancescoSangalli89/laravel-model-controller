<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        // foreach($movies as $movie) {
        //     echo $movie->title . '<br>';
        // }

        return view('movie_list', compact('movies'));
    }
}
