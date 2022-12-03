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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boutique $boutique)
    {
        //
    }
}
