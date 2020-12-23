<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Tag
 * @package App\Models
 * @property int id
 * @property string name
 * @property datetime created_at
 * @property datetime updated_at
 */
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
