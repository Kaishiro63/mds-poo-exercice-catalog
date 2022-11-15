<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function list(){
        $genres = Genre::all();
        return view('genres.genres', ['genres' => $genres]);
    }
}
