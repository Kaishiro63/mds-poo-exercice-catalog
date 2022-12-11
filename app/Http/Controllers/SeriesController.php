<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function list(Request $request){
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $genre = $request->query('genre');

        $query = Series::query();
        if ($order_by == 'averageRating' || $order_by == 'startYear' || $order_by == 'primaryTitle') {
            $query->orderBy($order_by, $order);
        }

        if ($genre != null) {
            $query->whereHas('genres', function ($q) use ($genre) {
                $q->where('label', $genre);
            });
        }

        $list = $query->paginate(20);
        return view('series.list', ['list' => $list]);
    }

    public function random() {
        $series = Series::inRandomOrder()->whereNotNull('poster')->first();
        return view('series.show', ['series' => $series]);
    }

    public function show($id) {
        $series = Series::where('id', $id)->first();
        $season = Episode::query()->where('series_id', $id)->groupBy('season_num')->get(['season_num']);

        return view('series.show', ['series' => $series, 'season' => $season]);
    }
}
