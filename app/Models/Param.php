<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property int $filter_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param whereFilterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Param whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Param extends Model
{
    //
}
