<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{

    // use LogsActivity;

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

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'department', 
        'office_phone', 
        'website', 
        'no_of_employees', 
        'skype', 
        'company', 
        'title', 
        'phone', 
        'mobile', 
        'secondary_email'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function formFields()
    {
        return [
            [
                'name' => 'first_name',
                'type' => 'text',
                'label' => 'First Name',
                'value' => 'Some Value',
            ],
        ];
    }
}
