<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
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
        'job_title', 
        'department', 
        'phone', 
        'mobile', 
        'email', 
        'secondary_email', 
        'owned_by_type',
        'owned_by_id',
        'contact_status_id',
        'contact_source_id',
        'fax',
        'assistant_name', 
        'assistant_phone', 
        'street', 
        'state',
        'city',
        'country',
        'pincode',
        'notes',
        'company_id'
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

