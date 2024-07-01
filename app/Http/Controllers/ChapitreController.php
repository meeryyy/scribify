<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use App\Models\Histoire;
use App\Models\User;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
          $chapitre= Chapitre::find($id);
          return view('chapitre.index',compact('chapitre'));

    }


    // public function showChapitre($histoiresId)
    // {
    //     $chapitre = Chapitre::where('histoires_id', $histoiresId)->first();
    //     return view('chapitre.showChapitre', compact('chapitre'));
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chapitre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chapitre = new Chapitre();
        $chapitre->title = $request->title;
        $chapitre->description = $request->description;
        $chapitre->histoires_id = $request->histoires_id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $chapitre->image = $imagePath;
        }
        $chapitre->save();
        return view('chapitre.show');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $chapitres = Chapitre::where('histoires_id', $id)->get();
       return view('chapitre.show', compact('chapitres'));
        // return view('chapitre.show');
    }


    public function showchapitre($id)
    {

        $chapitre = Chapitre::find($id);
        $userFind=Histoire::where('id',$chapitre->histoires_id)->first()->user_id;
        // $userId = $user["user_id"];
        // // $userid =["id" => $chapitre->user_id ];
        $user = User::findOrFail($userFind);


        return view('chapitre.showchapitre', compact('chapitre','user',));
        // return view('chapitre.show');
    }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chapitre=Chapitre::findorfail($id);
        return view('chapitre.edit',compact('chapitre'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $chapitre=Chapitre::findorfail($id);
        $chapitre->title = $request->title;
        $chapitre->description = $request->description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $chapitre->image = $imagePath;
        }
        $chapitre->save();
        return redirect()->route('histoire.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapitre $chapitre)
    {
        //
    }
}
