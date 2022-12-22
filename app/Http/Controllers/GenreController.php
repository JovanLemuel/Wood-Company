<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creategenre', [
            'pagetitle' => "Create Genre",
            'genre' => Genre::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreRequest $request)
    {
        Genre::create([
            'genre' => Genre::all(),
            'genre_name' => $request->genre_name,
        ]);

        return redirect('/dashboard/admin_genre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('admin_genre', [
            'pagetitle' => 'Genre',
            'genre' => $genre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("updategenre", [
            "genre" => Genre::findOrFail($id),
            "genres" => Genre::all(),
        ]);

        return redirect('/dashboard/admin_genre');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreRequest $request, $id)
    {
        $genre = Genre::findOrFail($id);

            $genre->update([
                "genre_name" => $request->genre_name,
            ]);

        return redirect("/dashboard/admin_genre");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);

        $genre->delete();

        return back();
    }

    public function admin_genre()
    {
        return view('admin_genre', [
            'pagetitle' => 'Genre',
            'genres' => Genre::all()
        ]);
    }
}
