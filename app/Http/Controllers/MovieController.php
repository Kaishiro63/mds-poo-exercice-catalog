<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller {

    public function list(){
        $list = Movie::all()->take(20);
        return view('movies.list', ['list' => $list]);
    }

    public function show($id) {
        $movie = Movie::where('id', $id)->first();
        return view('movies.show', ['movie' => $movie]);
    }
}