<?php

namespace App\Http\Controllers;

use App\Models\Article_Commande;
use App\Http\Requests\StoreArticle_CommandeRequest;
use App\Http\Requests\UpdateArticle_CommandeRequest;

class ArticleCommandeController extends Controller
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
     * @param  \App\Http\Requests\StoreArticle_CommandeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle_CommandeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article_Commande  $article_Commande
     * @return \Illuminate\Http\Response
     */
    public function show(Article_Commande $article_Commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article_Commande  $article_Commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Article_Commande $article_Commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticle_CommandeRequest  $request
     * @param  \App\Models\Article_Commande  $article_Commande
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticle_CommandeRequest $request, Article_Commande $article_Commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article_Commande  $article_Commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article_Commande $article_Commande)
    {
        //
    }
}
