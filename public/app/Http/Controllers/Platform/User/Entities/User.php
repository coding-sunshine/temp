<?php

namespace Modules\Platform\User\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Platform\Core\Traits\CanComment;
use Modules\Platform\Accounts\Entities\Account;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @package Modules\Platform\User\Entities
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $is_active
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $title
 * @property string|null $department
 * @property string|null $office_phone
 * @property string|null $mobile_phone
 * @property string|null $home_phone
 * @property string|null $signature
 * @property string|null $fax
 * @property string|null $secondary_email
 * @property int $left_panel_hide
 * @property string|null $theme
 * @property string|null $address_country
 * @property string|null $address_state
 * @property string|null $address_city
 * @property string|null $address_postal_code
 * @property string|null $address_street
 * @property int|null $time_format_id
 * @property int|null $date_format_id
 * @property string|null $time_zone
 * @property string|null $profile_image
 * @property int $access_to_all_entity
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Platform\Core\Entities\Comment[] $comments
 * @property-read \Modules\Platform\Accounts\Entities\Account|null $account
 * @property-read \Modules\Platform\User\Entities\DateFormat|null $dateFormat
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Platform\User\Entities\Group[] $groups
 * @property-read \Modules\Platform\Settings\Entities\Language|null $language
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read \Modules\Platform\User\Entities\TimeFormat|null $timeFormat
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User permission($permissions)
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAccessToAllEntity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAddressCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAddressCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAddressPostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAddressState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAddressStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereDateFormatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereHomePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereLeftPanelHide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereOfficePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereProfileImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereProfilePicConf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereSecondaryEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereTimeFormatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Platform\User\Entities\User withoutTrashed()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\User\Entities\User query()
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes, CausesActivity;

    public static function boot()
    {
        parent::boot();

        static::saving(function(User $user){
            $fullName = $user->first_name . ' ' . $user->last_name;
            $user->name = $fullName;
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'is_active',
        'last_name',
        'first_name',
        'title',
        'current_account',
        'department',
        'office_phone',
        'mobile_phone',
        'home_phone',
        'fax',
        'secondary_email',
        'left_panel_hide',
        'address_country',
        'address_state',
        'address_city',
        'address_postal_code',
        'address_street',
        'signature',
        'time_zone',
        'date_format_id',
        'time_format_id',
        'profile_image',
        'access_to_all_entity'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at'
    ];


    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function dateFormat()
    {
        return $this->belongsTo(DateFormat::class);
    }

    public function currentAccount()
    {
        return $this->belongsTo(Account::class);
    }

    public function isAdmin()
    {
        return \Auth::user()->hasPermissionTo('settings.access');
    }

    public function timeFormat()
    {
        return $this->belongsTo(TimeFormat::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}
