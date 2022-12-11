<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_Caisse extends Model
{
    use HasFactory;
    protected $fillable = ['boutique_id', 'valeur_caisse'];


    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }
}
