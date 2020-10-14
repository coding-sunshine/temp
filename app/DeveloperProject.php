<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Platform\Core\Helper\ActivityLogHelper;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



  class DeveloperProject extends Model
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

    public function statuses(){
        return $this->hasOne(Status::class, 'ID', 'status_ID');
    }

    public function properties(){
        return $this->hasOne(Propertie::class, 'ID', 'developer_project_ID');
    }
    public function property(){
        $sql = DB::table('developer_projects')
        ->select(DB::raw('select developer_projects.*, statuses.label AS "status_label",      
        MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bedrooms, 0) END) AS "bedrooms_low",
        MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bedrooms, 0) END) AS "bedrooms_high",
        
        MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bathrooms, 0) END) AS "bathrooms_low",
        MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bathrooms, 0) END) AS "bathrooms_high" from `developer_projects` join `properties` on properties.developer_project_ID = developer_projects.ID join `statuses` on statuses.ID = developer_projects.status_ID group by properties.developer_project_ID order by developer_projects.ID desc'));

        return $sql;
     }
    //  public function getTableColumns($table)
    //     {
    //         Schema::getConnection()->getDoctrineSchemaManager()->listTableColumns($table);

    //     }
        // public function getTableColumnAndTypeList($tableName, $fullType = false){
        //     $fieldAndTypeList = [];
        //     foreach (DB::select( "describe $tableName")  as $field){
        //         $type = ($fullType || !str_contains($field->Type, '('))? $field->Type: substr($field->Type, 0, strpos($field->Type, '('));
        //         $fieldAndTypeList[$field->Field] = $type;
        //     }
        //     return $fieldAndTypeList;
        // }
}
