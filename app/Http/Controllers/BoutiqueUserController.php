<?php

namespace App\Http\Controllers;

use App\Models\Boutique_User;
use App\Http\Requests\StoreBoutique_UserRequest;
use App\Http\Requests\UpdateBoutique_UserRequest;

class BoutiqueUserController extends Controller
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
     * @param  \App\Http\Requests\StoreBoutique_UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoutique_UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boutique_User  $boutique_User
     * @return \Illuminate\Http\Response
     */
    public function show(Boutique_User $boutique_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boutique_User  $boutique_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Boutique_User $boutique_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoutique_UserRequest  $request
     * @param  \App\Models\Boutique_User  $boutique_User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoutique_UserRequest $request, Boutique_User $boutique_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boutique_User  $boutique_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boutique_User $boutique_User)
    {
        //
    }
}
