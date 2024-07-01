<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Histoire;
use App\Models\Langue;
use App\Models\User;
use Illuminate\Http\Request;

class HistoireAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  Histoire::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

        return [$histoire, $categories, $user, $langues, $chapitres, $chaptersCount,$premierChapitre];
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
