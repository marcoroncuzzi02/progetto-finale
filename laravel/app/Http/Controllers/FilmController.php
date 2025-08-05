<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

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

        return view('films.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // 1. Validazione
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'genre_id' => 'required|exists:genres,id',
        ]);

        // 2. Recupero dei dati dal form
        $data = $request->all();

        // 3. Creazione del nuovo film
        $newFilm = new Film();
        $newFilm->title = $data['title'];
        $newFilm->description = $data['description'];
        $newFilm->genre_id = $data['genre_id'];

        // 4. Salvataggio nel DB
        $newFilm->save();

        // 5. Redirect alla pagina show
        return redirect()
            ->route('films.show', $newFilm)
            ->with('success', '✅ Film creato con successo!');
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
        return view('films.edit', compact('film', 'genres'));
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

        return redirect()
            ->route( "film.show" , $film);
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
