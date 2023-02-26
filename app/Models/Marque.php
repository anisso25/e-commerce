<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;

    protected $table = 'marques';

    public function categories()
    {
        return $this->hasMany(Categorie::class, 'marque_id');
    }

    public function produits()
    {
        return $this->hasMany(Categorie::class, 'marque_id');
    }

}



