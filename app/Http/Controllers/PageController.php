<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        $data = [
            'movies' => $movies
        ];
        $vote = [
            'maxVote' => 10
        ];
        return view('home', $data, $vote);
    }
}
