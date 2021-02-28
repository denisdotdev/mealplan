<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name'
    ];

    // Relationships
    public function ingredients(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Ingredient::class);
    }
}
