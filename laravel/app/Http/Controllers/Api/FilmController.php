<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index(){

        $films = Film::with('genre')->get();

        return response()->json(
            [
                "success" => true,
                "data" => $films
            ]
        );
    }

    public function show(Film $film){

        $film->load('genre');

        return response()->json(
            [
                "success" => true,
                "data" => $film
            ]
        );
    }

}
