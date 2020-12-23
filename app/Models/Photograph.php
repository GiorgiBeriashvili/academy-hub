<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photograph extends Model
{
    use HasFactory;

    /**
     * Get the academy that owns the photograph.
     */
    public function academy(): BelongsTo
    {
        return $this->belongsTo(Academy::class);
    }
}
