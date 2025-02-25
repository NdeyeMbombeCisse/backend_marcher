<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prix extends Model
{
    /** @use HasFactory<\Database\Factories\PrixFactory> */
    use HasFactory;
    protected $guarded=[];

    public function marcher(){
        return $this->belongsTo(Marcher::class);
    }

    public function produit(){
        return $this->belongsTo(Produit::class);
    }
}
