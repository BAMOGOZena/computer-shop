<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique_Type_Vente extends Model
{
    use HasFactory;
    protected $fillable = ['boutique_id', 'type_vente_id'];
}
