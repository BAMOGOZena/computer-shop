<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'typevente_id', 'date_vente', 'prix_vente'];


    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
