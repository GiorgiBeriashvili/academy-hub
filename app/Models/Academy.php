<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Academy
 * @package App\Models
 * @property int id
 * @property int user_id
 * @property string name
 * @property string logo
 * @property string country
 * @property string state
 * @property string city
 * @property string description
 * @property string motto
 * @property datetime date_of_establishment
 * @property boolean verified
 * @property datetime created_at
 * @property datetime updated_at
 */
class Academy extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'verified',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user that owns the academy.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The tags that belong to the academy.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps()->using(AcademyTag::class);
    }

    /**
     * The photographs that belong to the academy.
     */
    public function photographs(): HasMany
    {
        return $this->hasMany(Photograph::class);
    }
}
