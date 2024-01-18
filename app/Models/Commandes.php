<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantite',
        'id_produits',
        'id_clients'
    ];
}
