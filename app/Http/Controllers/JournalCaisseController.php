<?php

namespace App\Http\Controllers;

use App\Models\Journal_Caisse;
use App\Http\Requests\StoreJournal_CaisseRequest;
use App\Http\Requests\UpdateJournal_CaisseRequest;

class JournalCaisseController extends Controller
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
     * @param  \App\Http\Requests\StoreJournal_CaisseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJournal_CaisseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journal_Caisse  $journal_Caisse
     * @return \Illuminate\Http\Response
     */
    public function show(Journal_Caisse $journal_Caisse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journal_Caisse  $journal_Caisse
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal_Caisse $journal_Caisse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJournal_CaisseRequest  $request
     * @param  \App\Models\Journal_Caisse  $journal_Caisse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJournal_CaisseRequest $request, Journal_Caisse $journal_Caisse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journal_Caisse  $journal_Caisse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal_Caisse $journal_Caisse)
    {
        //
    }
}
