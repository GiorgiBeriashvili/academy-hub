<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Photograph
 * @package App\Models
 * @property int id
 * @property int academy_id
 * @property string photograph
 * @property datetime created_at
 * @property datetime updated_at
 */
class Photograph extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the academy that owns the photograph.
     */
    public function academy(): BelongsTo
    {
        return $this->belongsTo(Academy::class);
    }
}
