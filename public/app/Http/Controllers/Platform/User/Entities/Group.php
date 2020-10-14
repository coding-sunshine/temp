<?php

namespace Modules\Platform\User\Entities;

use Cog\Contracts\Ownership\CanBeOwner;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Accounts\Entities\Account;
use Modules\Platform\Core\Entities\CachableModel;

/**
 * Modules\Platform\User\Entities\Group
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $account_id
 * @property-read \Modules\Platform\Accounts\Entities\Account|null $account
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Platform\User\Entities\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\CachableModel disableCache()
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\Group onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\CachableModel withCacheCooldownSeconds($seconds)
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\Group withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\Group withoutTrashed()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\Group query()
 */
class Group extends CachableModel implements CanBeOwner
{
    use SoftDeletes, BelongsToTenants;

    public $table = 'groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'account_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
