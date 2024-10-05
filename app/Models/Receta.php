<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class);
    }
}
