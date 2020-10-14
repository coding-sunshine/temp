<?php

namespace Modules\Platform\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Modules\Platform\Core\Helper\DateHelper;
use Spatie\Activitylog\Traits\LogsActivity;

class Role extends Model
{
    use SoftDeletes, LogsActivity;

    protected static $logAttributes = [
        'name'
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

    public $table = 'roles';

    protected $fillable = [
        'name',
        'slug'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
