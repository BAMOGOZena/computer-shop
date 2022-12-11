<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable = ['nom_fr', 'prenom_fr', 'contact_fr', 'adresse_fr'];



    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
