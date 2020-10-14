<?php

namespace App\Http\Datatables;
use App\Http\Controllers\Platform\Core\Datatable\PlatformDataTable;
use App\Http\Controllers\Platform\Core\Helper\DataTableHelper;
use App\Propertie;
use App\Status;
use App\UserFavourite;
use App\DeveloperProject;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Services\MagicField;


/**
 * Class UsersDataTable
 * @package Modules\Platform\User\Datatables
 */
class PropertiesDataTable extends PlatformDataTable
{
    const SHOW_URL_ROUTE = 'afiliates';

   
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        $this->applyLinks($dataTable, self::SHOW_URL_ROUTE);

        $dataTable->filterColumn('created_at', function ($query, $keyword) {
            $dates = DataTableHelper::getDatesForFilter($keyword);

            if ($dates != null) {
                $query->whereBetween('created_at', array($dates[0], $dates[1]));
            }
        });
        $dataTable->filterColumn('updated_at', function ($query, $keyword) {
            $dates = DataTableHelper::getDatesForFilter($keyword);

            if ($dates != null) {
                $query->whereBetween('updated_at', array($dates[0], $dates[1]));
            }
        });

        return $dataTable;
    }
    public function ajax()
    {
        $status_all   = Status::all();
        $login_id = Auth::user()->id;
        $dataTable = new EloquentDataTable($this->query());
        
        //$this->applyLinks($dataTable, self::SHOW_URL_ROUTE);
       
         return $dataTable
            ->addColumn('All filed', function ($user) use ($status_all,$login_id) {
              $options = '';
             
              foreach ($status_all as $status) {
                if($status->ID == $user->status_ID){
                  $selected = "selected";
                }else{
                  $selected = "";
                }
                  $options .= '<option value="'.$status->ID.'" '.$selected.'>'.$status->label.'</option>';
              }
              //bedrooms
              if($user->bedrooms_low==$user->bedrooms_high){
                if(!empty($user->bedrooms_low) || $user->bedrooms_low != null){
                  $badrooms = $user->bedrooms_low;
                }else{
                  $badrooms = 0;
                }
              }else{
              $badrooms = $user->bedrooms_low."-".$user->bedrooms_high;
               }
              //bathrooms 
              if($user->bathrooms_low==$user->bathrooms_high){
                if(!empty($user->bathrooms_low) || $user->bathrooms_low != null){
                  $bathrooms = $user->bathrooms_low;
                }else{
                  $bathrooms = "0";
                }
              }else{
              $badrooms = $user->bathrooms_low."-".$user->bathrooms_high;
               }
               //garage
               if($user->car_low > 0 && $user->car_high > 0)
                {
                  if($user->car_low && $user->car_high)
                  {
                    if($user->car_low == $user->car_high){
                      if(!empty($user->car_low) || $user->car_low != null){
                        $car = $user->car_low;
                      }else{
                        $car ='0';
                      }
                      
                    }else{
                      $car = $user->car_low."-".$user->car_high;
                    }
                  }else if($user->car_high){
                    $car = "0-".$user->car_high;
                  }else{
                    $car = "0";
                  }

                }else{
                  $user->garage_low = filter_var($user->garage_low, FILTER_SANITIZE_NUMBER_INT);
                  $user->garage_high = filter_var($user->garage_high, FILTER_SANITIZE_NUMBER_INT);
                  if($user->garage_low >=0 && $user->garage_high >=0)
                  {
                   if($user->garage_low == $user->garage_high){
                    if(!empty($user->garage_low) || $user->garage_low != null){
                      $car = $user->garage_low;
                    }else{
                      $car ='0';
                    }
                    }else{
                      $car = $user->garage_low.'-'.$user->garage_high;
                    }
                      
                  }else if($user->garage_high >=0){
                    $car = '0-'.$user->garage_high;
                  }else{
                    $car = '0';
                  }
                }
                if($user->fav_user_id == $login_id){
                  $fav = "active";
                }else{
                  $fav = "";
                }
                if(!empty($user->is_nras)){
                  $nras = "<li class='green-clr'>NRAS</li>";
                }else{
                  $nras = "";
                }
                if(!empty($user->is_smsf)){
                  $smsf = "<li class='green-clr'>SMSF</li>";
                }else{
                  $smsf = "";
                }
                if(!empty($user->is_cashflow_positive)){
                  $cashflow = "<li class='orange-clr'>Cashflow Positive</li>";
                }else{
                  $cashflow = "";
                }
                if(!empty($user->on_hot_properties)){
                  $hot = "<li class='red-clr'>HOT</li>";
                }else{
                  $hot = "";
                }
          return $result = "
          <div class='row property-bx'>
                 <div class='col-md-12'>
                   <div class='top-property-hading'>
                      <div class='property-left1'>
                       <div>
                          <span class='color-org font-25' onclick=showPropertyDetails(`".$user->ID."`)>".$user->estate."</span>

                        </div>

                          <font class='font-18'></font><br> <i class='fas fa-map-marker-alt'></i>
                      </div>
                  

                   <div class='property-type1'>
                     <ul>
                     ".$nras."
                     ".$smsf."
                     ".$cashflow."
                     ".$hot."
                      
                     </ul>
                   </div>

                   <div class='price-range-right'>
                     <b>Price Range : </b> <span class='color-org font-18'>&nbsp; $".$user->price_low." - $".$user->price_high."</span>
                   </div>

                   <div class='clear'></div>
                    </div>

                    <div class='like-star ".$fav."' id = 'fav_".$user->ID."' onclick=updateUserFav(`".$user->ID."`,`".$login_id."`)><i class='fas fa-star'></i></div>
                <div class='check-bx-proprty'>
                <label class='check-box'><input type='checkbox' checked='checked'><span class='checkmark'></span></label>
                </div>

                <div class='clearfix'></div>
                    <div class='property-list-inr row'>
                      <div class='property-left-content'>
                      <div class='property-img'>
                        <img onclick=showPropertyDetails(`".$user->ID."`) src='image/property-img-1.png' alt=''>
                      </div>
                      <div class='property-text-left'>
                     
                        <p onmouseout=hideedit('status_ID_".$user->ID."') onmouseover=showedit('status_ID_".$user->ID."')><b class='color-org'>Build Status : </b><span id='spanstatus_ID".$user->ID."'>".$user->status_label." </span><img  id=status_ID_".$user->ID." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->ID."','status_ID') alt=''>


                        </p>
              
                        <select id='status_ID".$user->ID."' onchange='Changestatus(`".$user->ID."`,`status_ID`)' name = 'status' style='display:none;position:absolute;' autofocus>".$options." </select>

                        <p><b class='color-org'>Rental Yield : </b><span>".$user->rent_y_avg."%</span></p>

                        <p><b class='color-org'>Suburb : </b><span>".$user->suburb."
                        </span></p>

                        

                        <input type='text' id='suburb".$user->ID."' style='display:none;width:50%;' onfocusout=savechange('".$user->ID."','suburb') value=".$user->suburb." >

                        <p><b class='color-org'>Available Lots : </b><span>".$user->lots."</span></p>
                        <div class='clear'></div>
                        <ul>
                          <li>
                            <div class='icn-bx'><i class='fas fa-bed'></i></div>
                            ". $badrooms."
                        
                          </li>
                            
                          <li>
                            <div class='icn-bx'><i class='fas fa-bath'></i></div>
                            ".$badrooms."
                          </li>

                          <li>
                            <div class='icn-bx'><i class='fas fa-warehouse'></i></div>
                            ".$car."
                          </li>
                        </ul>
                      </div>

                      </div>
                     

                   
                      <div class='property-discription'>
                        <h4>Property Discription :</h4>
                        <h5>".$user->text_title."</h5>
                      
                        <p>".str_limit(html_entity_decode($user->text_intro, ENT_QUOTES), 300)."</p>
                      </div>
                      
                    </div>
                 </div>
               </div>";
            }) ->rawColumns(['All filed'])
            ->make(true);
        //return $dataTable->make(true);
    }
    /**
     * Get query source of dataTable.
     *
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
     {  
      //  $table_details = MagicField::getTableColumnAndTypeList('statuses');
      // $tbl_field = array_keys($table_details);
      // foreach($tbl_field as $key => $field){
      //   $field_details[$field] = MagicField::getFieldsDetails('statuses',$field);
      // }
      // $filter_field = array_filter($field_details);
      // dd($filter_field);

        $login_id = Auth::user()->id;
        //dd($login_id);
        $leads = DeveloperProject::query()
        ->select('developer_projects.*','statuses.label as status_label',DB::raw('MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bedrooms, 0) END) AS bedrooms_low, MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bedrooms, 0) END) AS bedrooms_high, MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bathrooms, 0) END) AS bathrooms_low, MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.bathrooms, 0) END) AS bathrooms_high,MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.garage, 0) END) AS garage_low, MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.garage, 0) END) AS garage_high,MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.car, 0) END) AS car_low, MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.car, 0) END) AS car_high, IF(SUM(properties.is_nras)>0,1,0) AS "is_nras", IF(SUM(properties.is_smsf)>0,1,0) AS "is_smsf", IF(SUM(properties.is_cashflow_positive)>0,1,0) AS "is_cashflow_positive", MIN(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.price, 0) END) AS "price_low", MAX(CASE WHEN properties.status_ID IN(0,1,126) THEN NULLIF(properties.price, 0) END) AS "price_high", IF(developer_projects.rent_low = 0, MIN(IF(properties.rent_weekly = 0, IF(developer_projects.rent_yield_avg = 0, ROUND(((developer_projects.rent_low + developer_projects.rent_high)/( select MAX( properties.price ) + MIN(NULLIF(properties.price,0)) from properties where properties.developer_project_ID=developer_projects.ID )) *properties.price),ROUND(((developer_projects.rent_yield_avg/100) * properties.price) / 52)),properties.rent_weekly)), developer_projects.rent_low) AS "rent_weekly_low", IF(developer_projects.rent_high = 0, MAX(IF(properties.rent_weekly = 0, IF(developer_projects.rent_yield_avg = 0, ROUND(((developer_projects.rent_low + developer_projects.rent_high)/( select MAX( properties.price ) + MIN(NULLIF(properties.price,0)) from properties where properties.developer_project_ID=developer_projects.ID )) *properties.price),ROUND(((developer_projects.rent_yield_avg/100) * properties.price) / 52)),properties.rent_weekly)), developer_projects.rent_high) AS "rent_weekly_high", IF(developer_projects.rent_yield_avg = 0, IF(AVG(properties.price) > 0,
        ROUND(SUM(IF(properties.rent_weekly = 0,IF(developer_projects.rent_yield_avg = 0, ROUND(( (developer_projects.rent_low + developer_projects.rent_high)/ ( select MAX( properties.price ) + MIN(NULLIF(properties.price,0)) from properties where properties.developer_project_ID=developer_projects.ID ) ) *properties.price), ROUND(((developer_projects.rent_yield_avg/100) * properties.price) / 52)
          ),properties.rent_weekly))/COUNT(properties.rent_weekly)*52/AVG(properties.price)*100, 2),
        0),developer_projects.rent_yield_avg) AS "rent_y_avg", ROUND(AVG(properties.rent_weekly)) AS "rent_weekly_avg"'),'user_favourites.user_ID as fav_user_id')
        ->join('properties','properties.developer_project_ID','=','developer_projects.ID')
        ->join('statuses','statuses.ID','=','developer_projects.status_ID')
        ->Leftjoin('user_favourites','user_favourites.developer_project_ID','=','developer_projects.ID')
        ->where('user_favourites.properties_ID', '0')
        ->orWhere('user_favourites.properties_ID', '=', 'properties.ID')
        ->where('user_favourites.user_ID', $login_id)
        ->groupBy('developer_projects.ID')
        ->orderBy('developer_projects.updated_at', 'desc');
        
               
                
              
        return $this->applyScopes($leads);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())

            ->setTableAttribute('class', 'table table-hover')
            ->parameters([
                'dom' => 'lBfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print'],
                'responsive' => false,
                'stateSave' => true,
                'columnFilters' => [
                    [
                        'column_number' => 0,
                        'filter_type' => 'text'
                    ],
                    [
                        'column_number' => 1,
                        'filter_type' => 'text'
                    ],
                    [
                        'column_number' => 2,
                        'filter_type' => 'bap_date_range_picker',
                    ],
                    [
                        'column_number' => 3,
                        'filter_type' => 'bap_date_range_picker',
                    ]
                ],
                'buttons' => DataTableHelper::buttons(),
                'regexp' => true

            ]);
    }

/**
     * @return array
     */
    protected function getColumns()
    {
        return [
            'All filed',
         ];
    }
}




