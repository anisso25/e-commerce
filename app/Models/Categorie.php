<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function marques()
    {
        return $this->belongsTo(Marque::class, 'marque_id');
    }

    public function produits()
    {
        return $this->hasMany(Categorie::class, 'category_id');
    }

}

