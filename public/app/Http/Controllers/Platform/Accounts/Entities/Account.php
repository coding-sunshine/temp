<?php

namespace Modules\Platform\Accounts\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Modules\Platform\Accounts\Entities\Account
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $is_enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $user_limit
 * @property int|null $storage_limit
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereUserLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account whereStorageLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Accounts\Entities\Account query()
 */
class Account extends Model
{
    use LogsActivity;

    protected static $logAttributes = [
        'name',
        'is_enabled'
    ];

    /**
     * @param  Model $model
     * @param  string $attribute
     * @return  array
     */
    protected static function getRelatedModelAttributeValue(Model $model, string $attribute): array
    {
        return ActivityLogHelper::getRelatedModelAttributeValue($model, $attribute);
    }

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    protected $dates = ['created_at', 'updated_at'];

    public $table = 'accounts';

    protected $fillable = [
        'name',
        'description',
        'is_enabled',
        'user_limit',
        'storage_limit'
    ];

}