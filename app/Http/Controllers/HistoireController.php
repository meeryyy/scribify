<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Chapitre;
use App\Models\Histoire;
use App\Models\Langue;
use App\Models\User;
use Illuminate\Http\Request;

class HistoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histoires = auth()->user()->histoires; // Use the defined relationship
        return view('histoire.index', compact('histoires'));
    }

    public function showHistoireToDashbord()
    {
        // Reuse the index logic to get stories
        $user = auth()->user()->id;
        $limit = 4; // You can set the desired limit here

        $histoires = Histoire::where('user_id', $user)->orderBy('created_at')->limit($limit)->get();

        return response()->json($histoires);
    }



    public function showallhistoire()
    {
        $histoires = Histoire::all();
        // return response()->json($histoires);
        // // die;
                return view('histoire.showallhistoire',compact('histoires'));
    }



    // Extract the common logic to get stories into a separate method
    private function getHistoiresForDashboard()
    {
        return auth()->user()->histoires;
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
        $histoire->categories_id = $request->categorie;
        $histoire->langues_id = $request->langue;
        $histoire->Tags = $request->tags;
        $histoire->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $histoire->image = $imagePath;
        }



        $histoire->save();
        return redirect()->route('histoire.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Categorie::all();
        $langues = Langue::all();
        // $user = User::findOrFail($id);
        // $histoire = $user->histoires()->get();
        // $histoire = auth()->user()->histoires;
        $histoire = Histoire::findOrFail($id);
        $userid = ["id" => $histoire->user_id];
        $user = User::findOrFail($userid["id"]);

        $chapitres = $histoire->chapitres;
        $premierChapitre = $histoire->chapitres->first();
        $chaptersCount = $histoire->chapitres()->count();
        return view('histoire.show', compact('histoire', 'categories', 'user', 'langues', 'chapitres', 'chaptersCount','premierChapitre'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $histoire = Histoire::findorfail($id);
        $categories = Categorie::all();
        $langues = Langue::all();
        return view('histoire.edit', compact('histoire', 'categories', 'langues'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $histoire = Histoire::findorfail($id);
        $histoire->title = $request->title;
        $histoire->description = $request->desc;
        $histoire->Copyright = $request->copyright;
        $histoire->characters = $request->characters;
        $histoire->categories_id = $request->categorie;
        $histoire->langues_id = $request->langue;
        $histoire->Tags = $request->tags;
        $histoire->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $histoire->image = $imagePath;
        }



        $histoire->save();
        return redirect()->route('histoire.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
