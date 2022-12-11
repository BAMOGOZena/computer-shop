<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['nom_bout', 'adresse_bout'];



    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    public function journal_caisses()
    {
        return $this->hasMany(Journal_Caisse::class);
    }
}
