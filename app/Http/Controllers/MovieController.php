<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller {

    public function list(Request $request){
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');

        $query = Movie::query();
        if ($order_by == 'averageRating' || $order_by == 'startYear' || $order_by == 'primaryTitle') {
            $query->orderBy($order_by, $order);
        }

        $list = $query->paginate(20);
        return view('movies.list', ['list' => $list]);
    }

    public function show($id) {
        $movie = Movie::where('id', $id)->first();
        return view('movies.show', ['movie' => $movie]);
    }
}