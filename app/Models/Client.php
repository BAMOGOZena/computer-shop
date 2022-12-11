<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom_clt', 'prenom_clt', 'contact_clt', 'email_clt', 'adresse_clt'];


    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }
}
