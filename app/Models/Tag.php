<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The academies that belong to the tag.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Academy::class)->withTimestamps()->using(AcademyTag::class);
    }
}
