<?php

namespace App\Http\Datatables;
use App\Http\Controllers\Platform\Core\Datatable\PlatformDataTable;
use App\Http\Controllers\Platform\Core\Helper\DataTableHelper;
use App\Contact;
use Yajra\DataTables\EloquentDataTable;

/**
 * Class UsersDataTable
 * @package Modules\Platform\User\Datatables
 */
class ContactsDataTable extends PlatformDataTable
{
    const SHOW_URL_ROUTE = 'contacts';


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

        $dataTable = new EloquentDataTable($this->query());
        //$this->applyLinks($dataTable, self::SHOW_URL_ROUTE);
       
         return $dataTable
            ->addColumn('All filed', function ($user) {
                
            return "
            <div class='row sales-list'>
            <div class='tble-check2'>
               <label class='check-box'><input type='checkbox' checked='checked'><span class='checkmark'></span></label>
            </div>
                <div class='col-md-3'>
                   <div class='sales-bx'>
                    <div class='img-client'>
                       <label for='image'>
                     <input type='file' name='image' id='image' style='display:none;'/>
                        <img id='blah' src='/profileimage/".$user->profile_image."' alt=''>
                   </label>
                   </div>
                    <div class='deatis-bx'>
                     <h4 class='hD-1'><div class='first_name_".$user->id."_div' style='float:left' onmouseout='hideedit(`first_name_edit_".$user->id."`,`first_name`)'   onmouseover='showedit(`first_name_edit_".$user->id."`,`first_name`)' id='first_name_div_".$user->id."'>".$user->first_name."<span>


                        <img  id='first_name_edit_".$user->id."'  style='display:none;' src='/image/edit-icon.png'  onclick='editshow(`first_name_".$user->id."`,`first_name`)' alt=''></a></span></div>
                        </h4>
                         <div class='clearfix'></div>
                        <input type='text' class='first_name_".$user->id."_input' id='first_name_".$user->id."' style='display:none;width:50%;' onblur='savechange(`first_name_".$user->id."`,`first_name`,`".$user->id."`)' value=".$user->first_name." ".$user->first_name." >

                        <div class='edit' style='display:none; onkeyup='EditName(".$user->id.",`first_name`)' id='first_name".$user->id."'>".$user->first_name."</div>

                         <div contentEditable='true' class='edit' style='display:none;onkeyup='EditName(".$user->id.",`last_name`)' id='last_name".$user->id."'>".$user->last_name."</div>
                        <div class='clearfix'></div>
                        <div style='float:left;'><p class='txt-bx'>
                        <div style='float:left' class='company_".$user->id."_div'  onmouseout='hideedit(`company_edit_".$user->id."`,`company`)' onmouseover='showedit(`company_edit_".$user->id."`,`company`)' id='company_div_".$user->id."'><B>".$user->company."</B><span>
                       <img  id='company_edit_".$user->id."' style='display:none;' src='/image/edit-icon.png'  onclick='editshow(`company_".$user->id."`,`company`)' alt=''></a>
                       </span></div></h4>
                         <div class='clearfix'></div>
                        <input type='text' class='company_".$user->id."_input' id='company_".$user->id."' style='display:none;width:50%;' onblur='savechange(`company_".$user->id."`,`company`,`".$user->id."`)' value=".$user->company." ".$user->company." >
                        
                        ".$user->street.",".$user->city.",".$user->state.",".$user->country.",".$user->pincode."

                       <!--  <span><img src='img/edit-icon.png'  alt=''></span> -->
                        </p></div>
                      
                      <div class=''></div>
                    </div>
                  </div>
                </div>
                <div class='col-md-2 pad-top-bot'>
                    <div class='sales-bx'>
                  <p>
                    
                  <b class='wid-40'>Status : </b><span class='color-org'></span>
                 <div class='dropdown'>
                  <select id='status_".$user->id."' name='status' onchange='getval(".$user->id.",`is_active`)'; class='dropdown-toggle na-btn dropbtn' aria-haspopup='true' aria-expanded='false'>
                   <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                   <option class='dropdown-item' >Select Status</option>
                   <option class='dropdown-item' value='1'>Active</option>
                   <option class='dropdown-item'value='0'>Inactive</option>
                   </div>
                  </select>  
                    </div>

                    <!-- <img src='img/edit-icon.png' alt=''> -->
                </p>
                <div class='clearfix'></div>
                <p>
                <b class='wid-40'>Join Date : </b>
                <span class=''><img src='/image/calendar.png' alt=''>&nbsp;".$user->created_at."</span>
                </p>
                  <p>
                  </p><ul class='socila-bx1'>
                          <li><img src='/image/facebook.png' alt=''></li>
                          <li><img src='/image/linkdin.png' alt=''></li>
                          <li><img src='/image/twitter.png' alt=''></li>
                          <li><img src='/image/pintrerst.png' alt=''></li>
                          <li><img src='/image/youtube.png' alt=''></li>
                        </ul>
                <p></p>
                    </div>
                  </div>

                  <div class='col-md-5 pad-top-bot'>
                  <div class='sales-bx'>
                    <div class='info-bx'>
              <p>
              <b class='wid-40'>Affiliate : </b><span class='color-org'>Nisrin Spacy</span>
            </p>
            <p>
              <b class='wid-40'>Subscriber : </b><span class=''>Ashley Southen</span>
            </p>
              <p>
              <b class='wid-40'>BDM : </b><span class=''>Poul Hasson</span>
            </p>
            </div>

              <div class='info-bx'>
              <p>
              <b class='wid-40'>Affiliate : </b><span class='color-org'>Nisrin Spacy</span>
            </p>
            <p>
              <b class='wid-40'>Subscriber : </b><span class=''>Ashley Southen</span>
            </p>
              <p>
              <b class='wid-40'>BDM : </b><span class=''>Poul Hasson</span>
            </p>
            </div>
                    </div>
                  </div>
                   <div class='col-md-2 pad-top-bot'>
                    <div class='sales-bx broder-none'>
                     <p>
                   <a href='contacts/destroy/$user->id'>&nbsp;&nbsp;&nbsp;<i class='fa fa-times'></i></b>&nbsp;<span>Delete Setting</span></a>
                    <p>
                    <p>
                       <a href='JavaScript:;' onclick='openForm(".$user->id.")''><b><img src='/image/edit-icon.png' alt=''></b>&nbsp;<span>Edit user</span></a>
                      </p>
                    <p>
                   
                     <p>
                        <a href='JavaScript:;'><b><img src='/image/satting-2.png' alt=''></b>&nbsp;<span>Admin Setting</span></a>
                      </p>
                       <p>
                        <a href='JavaScript:;'><b><img src='/image/marketing-icon.png' alt=''></b>&nbsp;<span>Marketing Tools</span></a>
                      </p>
                       <p>
                        <a href='JavaScript:;'><b><img src='/image/satting-2.png' alt=''></b>&nbsp;<span>View Downline</span></a>
                      </p>
                    </div>
                   </div>
                  <div class='clear'></div>
                  <div class='gry-strip'>
                  <ul class='float-l mar-left'>
                    <li> <div style='float:left' class='mobile".$user->id."_div'  onmouseout='hideedit(`mobile_edit_".$user->id."`,`mobile`)' onmouseover='showedit(`mobile_edit_".$user->id."`,`mobile`)' id='mobile_phone_div_".$user->id."'><img src='/image/mobile-1.png' alt=''>".$user->mobile."</b><span>
                          <img  id='mobile_edit_".$user->id."' style='display:none;' src='/image/edit-icon.png' onclick='editshow(`mobile".$user->id."`,`mobile`)' alt=''></a></span></div>
                         <input type='text' class='mobile".$user->id."_input' id='mobile".$user->id."' style='display:none;width:50%;' onblur='savechange(`mobile".$user->id."`,`mobile`,`".$user->id."`)' value=".$user->mobile." ".$user->mobile." ></li>
                           <div class='edit' style='display:none; onkeyup='EditName(".$user->mobile.",`mobile`)' id='mobile".$user->id."'>".$user->mobile."</div>


                           <li> <div style='float:left' class='phone".$user->id."_div'  onmouseout='hideedit(`phone_edit_".$user->id."`,`phone`)' onmouseover='showedit(`phone_edit_".$user->id."`,`phone`)' id='phone_div_".$user->id."'><img src='/image/mobile-1.png' alt=''>".$user->phone."</b><span>
                          <img  id='phone_edit_".$user->id."' style='display:none;' src='/image/edit-icon.png' onclick='editshow(`phone_".$user->id."`,`phone`)' alt=''></a></span></div>
                         <input type='text' class='phone_".$user->id."_input' id='phone_".$user->id."' style='display:none;width:50%;' onblur='savechange(`phone_".$user->id."`,`phone`,`".$user->id."`)' value=".$user->phone." ".$user->phone." ></li>
                           <div class='edit' style='display:none; onkeyup='EditName(".$user->office_phone.",`phone`)' id='phone".$user->id."'>".$user->phone."</div>


                            <li> <div style='float:left' class='email_".$user->id."_div'  onmouseout='hideedit(`email_edit_".$user->id."`,`email`)' onmouseover='showedit(`email_edit_".$user->id."`,`email`)' id='email_div_".$user->id."'><img src='/image/mobile-1.png' alt=''>".$user->email."</b><span>
                          <img  id='email_edit_".$user->id."' style='display:none;' src='/image/edit-icon.png' onclick='editshow(`email_".$user->id."`,`email`)' alt=''></a></span></div>
                         <input type='text' class='email_".$user->id."_input' id='email_".$user->id."' style='display:none;width:50%;' onblur='savechange(`email_".$user->id."`,`email`,`".$user->id."`)' value=".$user->email." ".$user->email." ></li>
                           <div class='edit' style='display:none; onkeyup='EditName(".$user->email.",`email`)' id='email".$user->id."'>".$user->email."</div>
                        <ul class='float-r font-10'>
                        <li><span class='round-org'></span></li>
                        <li>Last Modified : ".$user->updated_at."</li>
                        <li><span class='round-org'></span></li>
                        <li>Created on : ".$user->created_at."</li>
                      </ul>
                    
                  </ul>

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
       $first_name = isset($_GET['first_name'])?$_GET['first_name']:""; 
       $last_name = isset($_GET['last_name'])?$_GET['last_name']:""; 
       $email = isset($_GET['email'])?$_GET['email']:""; 
       $mobile_phone = isset($_GET['mobile_phone'])?$_GET['mobile_phone']:""; 
       

    if (isset($_GET['first_name']))
      {  
          $leads = Contact::select(
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'mobile',
            'street',
            'city',
            'state',
            'country',
            'pincode',
            'updated_at',
            'company',
            'profile_image',
             'created_at'
            )->where('first_name', $first_name)->orwhere('last_name', $last_name)
            ->orwhere('email', $email)->orwhere('last_name', $mobile_phone);
     } else {
            $leads = Contact::select(
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'mobile',
            'street',
            'city',
            'state',
            'country',
            'company',
            'pincode',
            'profile_image',
            'updated_at',
            'created_at'
            );
     }
     // $leads = Role::where('name', 'affiliates')->first()->users()->where('is_active', '1');
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
                'buttons'      => ['export', 'print', 'reset', 'reload'],
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
