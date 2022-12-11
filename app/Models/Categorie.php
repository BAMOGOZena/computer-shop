<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['boutique_id', 'libelle_cat'];



    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
