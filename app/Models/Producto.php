<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    public function recetas(): BelongsToMany
    {
        return $this->belongsToMany(Receta::class);
    }
}
