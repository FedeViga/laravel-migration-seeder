<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        // prendo solo i treni che hanno la data corrispondente alla data corrente
        $trains = Train::where('data', date("Y-m-d"))->get();

        return view('home', compact('trains'));
    }
}
