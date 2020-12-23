<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class AcademyTag
 * @package App\Models
 * @property int id
 * @property int academy_id
 * @property int tag_id
 * @property datetime created_at
 * @property datetime updated_at
 */
class AcademyTag extends Pivot
{
    use HasFactory;
}
