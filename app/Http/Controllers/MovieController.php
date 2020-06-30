<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Movie;

class MovieController extends Controller
{
    public function topMovies ()
    {
        $movies = DB::table('movies')
        ->select('name', 'rating')
        ->orderBy('rating', 'desc')
        ->limit(10)
        ->get();

    return $movies;
 
    }

    public function movieOfTheWeek ()
    {
        $movie_of_the_week_id = 45;

        $movie = Movie::findOrFail($movie_of_the_week_id);

        $genres = $movie->genres;
        $people = $movie->people;
        
        return [
            'movie' => $movie,
            'genres' => $genres,
            'actors' => $people
        ];


    }
}
