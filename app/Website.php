<?php

namespace Modules\Platform\Sitecreator\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Modules\Platform\Sitecreator\Entities\Website
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $is_enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $user_limit
 * @property int|null $storage_limit
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereUserLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website whereStorageLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Sitecreator\Entities\Website query()
 */
class Website extends Model
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

    public $table = 'websites';

    protected $fillable = [
        'account_id',
        'account_user_role_id',
        'website_name',
        'website_url',
        'theme_group_id',
        'theme_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function account_user_role()
    {
        return $this->belongsTo(AccountsUserRole::class);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
    public function theme_group()
    {
        return $this->belongsTo(ThemesGroup::class);
    }

}