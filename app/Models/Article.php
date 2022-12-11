<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['categorie_id', 'vente_id', 'nom_art', 'caracteristique', 'prix_achat', 'qtite_dispo'];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }
}
