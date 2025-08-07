<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;
use App\Models\Tag;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::with('genre')->get();

        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $tags = Tag::all();

        return view('films.create', compact('genres','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newFilm = new Film();
        $newFilm->title = $data['title'];
        $newFilm->description = $data['description'];
        $newFilm->genre_id = $data['genre_id'];

        $newFilm->save();

        if ($request->has('tags')) {
            $newFilm->tags()->attach( $data['tags'] );
        }else{
            $newFilm->tags()->detach();
        };

        return redirect()
            ->route('films.show', $newFilm)
            ->with('success', 'Film creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $genres = Genre::all();
        $tags = Tag::all();

        return view('films.edit', compact('film', 'genres', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $data= $request->all();


        $film->title = $data['title'];
        $film->description = $data['description'];
        $film->genre_id = $data['genre_id'];

        $film->update();

        if ($request->has('tags')) {
            $film->tags()->sync( $data['tags'] );
        }else{
            $film->tags()->detach();
        };

        return redirect()
            ->route("films.show", $film)
            ->with('success', 'Film aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Film eliminato con successo!');
    }
}
