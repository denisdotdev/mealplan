<?php

namespace App\Models;

class Ingredient extends \Illuminate\Database\Eloquent\Model
{
    // Relationships
    public function recipe(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }
}
