<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        $trainsList = Train::where('company', 'trenitalia')->orderBy('departure_time', 'asc')->get();
        return view('home', compact('trainsList'));
    }
}
