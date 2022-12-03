<?php

namespace App\Http\Controllers;

use App\Models\Type_Vente;
use App\Http\Requests\StoreType_VenteRequest;
use App\Http\Requests\UpdateType_VenteRequest;

class TypeVenteController extends Controller
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
     * @param  \App\Http\Requests\StoreType_VenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType_VenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_Vente  $type_Vente
     * @return \Illuminate\Http\Response
     */
    public function show(Type_Vente $type_Vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_Vente  $type_Vente
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_Vente $type_Vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateType_VenteRequest  $request
     * @param  \App\Models\Type_Vente  $type_Vente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateType_VenteRequest $request, Type_Vente $type_Vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_Vente  $type_Vente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_Vente $type_Vente)
    {
        //
    }
}
