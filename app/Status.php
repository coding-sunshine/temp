<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;

  class Status extends Model
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
        'fax', 
        'annual_revenue', 
        'website', 
        'no_of_employees', 
        'skype', 
        'company', 
        'job_title', 
        'phone', 
        'mobile', 
        'secondary_email',
        'description',
        'company_id',

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
    public function statuses()
    {
        return $this->belongsTo(DeveloperProject::class,'status_ID','ID');
    }
  
  
}
