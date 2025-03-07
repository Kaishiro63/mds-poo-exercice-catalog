<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller {

    public function list(Request $request) {
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $genre = $request->query('genre');

        $query = Movie::query();
        if ($order_by == 'averageRating' || $order_by == 'startYear' || $order_by == 'primaryTitle') {
            $query->orderBy($order_by, $order);
        }

        if ($genre != null) {
            $query->whereHas('genres', function ($q) use ($genre) {
                $q->where('label', $genre);
            });
        }

        $list = $query->paginate(20);
        return view('movies.list', ['list' => $list]);
    }

    public function random() {
        $movie = Movie::inRandomOrder()->whereNotNull('poster')->first();
        return view('movies.show', ['movie' => $movie]);
    }

    public function show($id) {
        $movie = Movie::where('id', $id)->first();
        return view('movies.show', ['movie' => $movie]);
    }
}