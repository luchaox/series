<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::get();

        return view('series.index', compact('series'));
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $request) {
        $dados = $request->except("_token");

        Serie::create($dados);
        return redirect()->route('list_series');
    }
}
