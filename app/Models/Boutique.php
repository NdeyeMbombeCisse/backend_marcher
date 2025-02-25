<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    /** @use HasFactory<\Database\Factories\BoutiqueFactory> */
    use HasFactory;
    protected $guarded=[];
    public function marcher(){
        return $this->belongsTo(Marcher::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
