<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'numeroTelephone',
        'email',
        'id_produits'
    ];
}
