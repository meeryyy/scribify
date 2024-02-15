<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Histoire;
use App\Models\Langue;
use Illuminate\Http\Request;

class HistoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
   
        $langues = Langue::all();
        return view('histoire.create', compact('categories', 'langues'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $histoire = new Histoire();
        $histoire->title = $request->title;
        $histoire->description = $request->desc;
        $histoire->Copyright = $request->copyright;
        $histoire->characters = $request->characters;
        $histoire->categories_id=$request->categorie;
        $histoire->langues_id=$request->langue;
        $histoire->Tags = $request->tags;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $histoire->image = $imagePath;
        }

        
        $histoire->save();
        return response("gooooooooooood");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view('histoire.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
