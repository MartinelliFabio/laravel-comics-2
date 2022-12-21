<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function characters() {
        $characters = Comic::all();
        return view('characters', compact('characters'));   
    }

    public function home() {
        $comics = config('db_seeder.comics');
        return view('home', compact('comics'));   
    }

    public function movies() {
        $movies = Comic::all();
        return view('movies', compact('movies'));   
    }

    public function tv() {
        $tv = Comic::all();
        return view('tv', compact('tv'));   
    }

    public function games() {
        $games = Comic::all();
        return view('games', compact('games'));   
    }
    
}
