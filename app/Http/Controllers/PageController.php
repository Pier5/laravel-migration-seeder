<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {

        // tutti i treni
        $trainsList = Train::all();

        // in partenza oggi
        // $trainsList = Train::whereDate('departure_time', date('Y-m-d'))->orderBy('departure_time', 'asc')->get(); 

        // controllo anche sull'orario
        // $trainsList = Train::whereDate('departure_time', date('Y-m-d'))->whereTime('departure_time', '>=', date('H:i:s'))->orderBy('departure_time', 'asc')->get(); 


        // in partenza questo mese
        // $trainsList = Train::whereMonth('departure_time', date('m'))->orderBy('departure_time', 'asc')->get(); 


        // in partenza quest'anno
        // $trainsList = Train::whereYear('departure_time', date('Y'))->orderBy('departure_time', 'asc')->get();
        
        return view('home', compact('trainsList'));
    }
}


