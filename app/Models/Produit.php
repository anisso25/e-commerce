<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function marques()
    {
        return $this->belongsTo(Categorie::class, 'marque_id');
    }
}
