<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $qty
 * @property int $status
 * @property int $product_id
 * @property int $user_id
 * @property int $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductUserCard whereUserId($value)
 * @mixin \Eloquent
 */
class ProductUserCard extends Model
{
    //
}
