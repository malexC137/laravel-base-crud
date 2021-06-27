<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', [
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $request->validate([
            "title"=>"required|max:100",
            "description"=>"required|max:10000",
            "thumb"=>"required|max:255",
            "price"=>"required|between:0,99.99",
            "series"=>"required|max:100",
            "sale_date"=>"required|date_format:Y-m-d",
            "type"=>"required|max:100",
        ]);

        $newComic = new Comic();
        $newComic->fill($newComicData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        if (is_null($comic)) {
            abort(404);
        }
        return view('comics.show', [
            "comic" => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view("comics.edit", [
            "comic" => $comic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $formData = $request->all();

        $request->validate([
            "title"=>"required|max:100",
            "description"=>"required|max:10000",
            "thumb"=>"required|max:255",
            "price"=>"required|between:0,99.99",
            "series"=>"required|max:100",
            "sale_date"=>"required|date_format:Y-m-d",
            "type"=>"required|max:100",
        ]);

        $comic->update($formData);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route("comics.index"); 
    }
}
