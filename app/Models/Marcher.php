<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcher extends Model
{
    /** @use HasFactory<\Database\Factories\MarcherFactory> */
    use HasFactory;
    protected $guarded=[];

    public function boutiques(){
        return $this->hasmany(Boutique::class);
    }

    public function produits(){
        return $this->belongsToMany(Produit::class);
    }
}
