<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Http\Requests\StoreBoutiqueRequest;
use App\Http\Requests\UpdateBoutiqueRequest;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boutiques = Boutique::all();
        return view('front-office.boutiques.index', ['boutiques' => $boutiques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $boutique = new Boutique();
        return view('front-office.boutiques.create', compact('boutique'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBoutiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoutiqueRequest $request)
    {
        //
        $boutique = Boutique::create([
            'nom_bout' => $request->nom_bout,
            'adresse_bout' => $request->adresse_bout
        ]);
        return redirect()->route('boutiques.show', $boutique)->with("votre nouvelle boutique a été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show(Boutique $boutique)
    {
        //
        return view('front-office.boutiques.show', ["boutique" => $boutique]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function edit(Boutique $boutique)
    {
        //
        return view('front-office.boutiques.edit', ['boutique' => $boutique]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoutiqueRequest  $request
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoutiqueRequest $request, Boutique $boutique)
    {
        //
        Boutique::where('id', $boutique)->update([
            'nom_bout' => $request->nom_bout,
            'adresse_bout' => $request->adresse_bout

        ]);
        return redirect()->route('boutiques.show', $boutique)->with("Modification éffectuée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boutique $id)
    {
        //
        Boutique::destroy($id);
        return redirect()->route('boutiques.index')->with('Suppression réussie');
    }
}
