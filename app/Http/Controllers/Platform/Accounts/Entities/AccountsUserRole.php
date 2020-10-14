<?php

namespace Modules\Platform\Accounts\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Platform\Accounts\Entities\Account;
use Modules\Platform\User\Entities\User;
use Modules\Platform\User\Entities\Role;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;

class AccountsUserRole extends Model
{
    use LogsActivity;

    protected static $logAttributes = [
        'account.name',
        'user.name',
        'role.name'
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

    public $table = 'accounts_user_role';

    protected $fillable = [
        'account_id',
        'user_id',
        'role_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
