<?php

namespace App\Http\Datatables;
use App\Http\Controllers\Platform\Core\Datatable\PlatformDataTable;
use App\Http\Controllers\Platform\Core\Helper\DataTableHelper;
use App\User;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Http\Request;

/**
 * Class UsersDataTable
 * @package Modules\Platform\User\Datatables
 */
class AfiliatesDataTable extends PlatformDataTable
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
                    <form method ='post' id='upload_form' enctype='multipart/form-data'>
                     <input type='file' name='image' id='image' style='display:none;'/>
                     <input type='text' name='id' id='id' value ='".$user->id."'style='display:none;'/>
                     <img id='blah' src='/profileimage/".$user->avatar."' alt=''>
                     </form>
                   </label>
                    </div>
                    <div class='deatis-bx'>
                     <h4 class='hD-1' onmouseout=hideedit('firstname_".$user->id."') onmouseover=showedit('firstname_".$user->id."')><span id=spanfirstname".$user->id.">".$user->firstname."</span>
                        <img  id=firstname_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."','firstname') alt=''></a>
                      </h4>
                        <input type='text' id='firstname".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."','firstname') value=".$user->firstname." >
                        <div class='clearfix'></div>
                        <div style='float:left;'><p class='txt-bx'>
                        <p class='txt-bx'  onmouseout=hideedit('company_".$user->id."') onmouseover=showedit('company_".$user->id."')>
                        <b><span id='spancompany".$user->id."'>".$user->company."&nbsp;</span></b>
                        <img  id=company_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."',`company`) alt=''></a>
                        </p>
                        <input type='text' id='company".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."',`company`) value='".$user->company."'>
                        
                        <p class='txt-bx' onmouseout=hideedit('street_".$user->id."') onmouseover=showedit('street_".$user->id."')>  
                        <span id='spanstreet".$user->id."'>".$user->street.",".$user->suburb.",".$user->postcode.",".$user->state."</span>
                        <img  id=street_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."',`street`) alt=''>
                        <!--  <span><img src='img/edit-icon.png'  alt=''></span> -->
                        </p>
                        <input type='text' id='street".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."',`street`) value='".$user->street."'>

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
                   <option class='dropdown-item' value='N'>Active</option>
                   <option class='dropdown-item'value='0'>Inactive</option>
                   </div>
                  </select>  
                    </div>

                    <!-- <img src='img/edit-icon.png' alt=''> -->
                </p>
                <div class='clearfix'></div>
                <p>
                <b class='wid-40'>Join Date : </b>
                <span class=''><img src='/image/calendar.png' alt=''>&nbsp;".$user->created_on."</span>
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
                    <a href='affiliates/destroy/$user->id'>&nbsp;&nbsp;&nbsp;<i class='fa fa-times'></i></b>&nbsp;<span>Delete Setting</span></a>

                    <p>
                    <p>
                    <a href='JavaScript:;' onclick='getid(".$user->id.")'' data-toggle='modal' data-target='#myModalForm1'><b><img src='/image/edit-icon.png' alt=''></b>&nbsp;<span>Edit user</span></a>
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
                     <li> <div onmouseout=hideedit('mobile_".$user->id."') onmouseover=showedit('mobile_".$user->id."')><span id=spanmobile".$user->id."><img src='/image/mobile-1.png' alt=''>".$user->mobile."</span>
                        <img  id=mobile_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."','mobile') alt=''></a>
                       </div>
                        <input type='text' id='mobile".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."','mobile') value=".$user->mobile." ><li>

                         <li> <div onmouseout=hideedit('phone_".$user->id."') onmouseover=showedit('phone_".$user->id."')><span id=spanphone".$user->id."><img src='/image/mobile-1.png' alt=''>".$user->phone."</span>
                        <img  id=phone_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."','phone') alt=''></a>
                       </div>
                        <input type='text' id='phone".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."','phone') value=".$user->phone." ><li>
                        <li> <div onmouseout=hideedit('email_".$user->id."') onmouseover=showedit('email_".$user->id."')><span id=spanemail".$user->id."><img src='/image/mobile-1.png' alt=''>".$user->email."</span>
                        <img  id=email_".$user->id." style='display:none;position:absolute;' src='/image/edit-icon.png'  onclick=editshow('".$user->id."','email') alt=''></a>
                       </div>
                        <input type='text' id='email".$user->id."' style='display:none;width:50%;' onfocusout=savechange('".$user->id."','email') value=".$user->email." ><li>
                           <div class='edit' style='display:none; onkeyup='EditName(".$user->email.",`email`)' id='email".$user->id."'>".$user->email."</div>
                        <ul class='float-r font-10'>
                        <li><span class='round-org'></span></li>
                        <li>Last Modified : ".$user->updated_at->todatestring()."</li>
                        <li><span class='round-org'></span></li>
                        <li>Created on : ".$user->created_on."</li>
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
       $first_name = isset($_GET['firstname'])?$_GET['firstname']:""; 
       $email = isset($_GET['email'])?$_GET['email']:""; 
       $mobile = isset($_GET['mobile'])?$_GET['mobile']:""; 
       

    if (isset($_GET['first_name']))
      {  
          $leads = User::select(
              'id', 
              'contact_id',
              'firstname', 
              'surname',
              'partner', 
              'title',
              'company', 
              'company_name',
              'bk_company_name',
              'slogan', 
              'service', 
              'extra_company_info',
              'email',
              'email2' ,
              'followup_date',
              'website', 
              'website_link', 
              'phone',
              'phone_ext', 
              'phone2', 
              'phone2_ext', 
              'phone_work', 
              'phone_work_ext',
              'fax',
              'mobile',
              'skype',
              'linkedin', 
              'facebook', 
              'street', 
              'suburb', 
              'postcode', 
              'state', 
              'street2', 
              'suburb2', 
              'postcode2', 
              'state2', 
              'referred_by',
              'affiliate_ID',
              'username', 
              'password', 
              'usertype', 
              'is_new',
              'sales_manager_ID', 
              'super_group_ID', 
              'ref_partner_ID', 
              'notes', 
              'important_notes',
              'enabled', 
              'url_key',
              'inv_url', 
              'inv_title', 
              'inv_phone', 
              'inv_email', 
              'hot_url', 
              'hot_title', 
              'hot_phone', 
              'hot_email',
              'security_hash', 
              'landing_template_ID', 
              'usertype_status',
              'lead_source',
              'lead_status', 
              'sales_process',
              'status_modified_on', 
              'touchbase_campaign_ID', 
              'imported', 
              'bdm_ID', 
              'planner_user_ID', 
              'broker_user_ID', 
              'accountant_user_ID', 
              'conveyancer_user_ID', 
              'lawyer_user_ID', 
              'property_manager_user_ID', 
              'insurance_agency_user_ID',
              'twitter', 
              'youtube', 
              'social_icon_size', 
              'googleplus', 
              'pinterest', 
              'test_account', 
              'fin_planner_ID', 
              'priority_ID', 
              'event_coordinator_user_ID', 
              'modified_by_user_ID', 
              'updated_at', 
              'created_by_user_ID',
              'created_on',
              'date_joined', 
              'sync_status', 
              'avatar', 
              'contact_type', 
              'firstname2', 
              'surname2', 
              'title2', 
              'company_name2', 
              'contact_email', 
              'contact_email2', 
              'mobile2', 
              'website_link2', 
              'agreement_signed',
              'crm_training', 
              'accessed_fusion_crm', 
              'fusion_crm_emailer', 
              'uploaded_contacts', 
              'autopilot_marketing',
              'accessed_property_portal' ,
              'accessed_feed',
              'terms_accepted', 
              'terms_continue', 
              'sales_agent_ID'
            )->where('usertype', 'G')->onwhere('firstname', $firstname)
            ->orwhere('email', $email)->orwhere('mobile', $mobile);
     } else {
            $leads = User::select(
              'id', 
              'contact_id',
              'firstname', 
              'surname',
              'partner', 
              'title',
              'company', 
              'company_name',
              'bk_company_name',
              'slogan', 
              'service', 
              'extra_company_info',
              'email',
              'email2' ,
              'followup_date',
              'website', 
              'website_link', 
              'phone',
              'phone_ext', 
              'phone2', 
              'phone2_ext', 
              'phone_work', 
              'phone_work_ext',
              'fax',
              'mobile',
              'skype',
              'linkedin', 
              'facebook', 
              'street', 
              'suburb', 
              'postcode', 
              'state', 
              'street2', 
              'suburb2', 
              'postcode2', 
              'state2', 
              'referred_by',
              'affiliate_ID',
              'username', 
              'password', 
              'usertype', 
              'is_new',
              'sales_manager_ID', 
              'super_group_ID', 
              'ref_partner_ID', 
              'notes', 
              'important_notes',
              'enabled', 
              'url_key',
              'inv_url', 
              'inv_title', 
              'inv_phone', 
              'inv_email', 
              'hot_url', 
              'hot_title', 
              'hot_phone', 
              'hot_email',
              'security_hash', 
              'landing_template_ID', 
              'usertype_status',
              'lead_source',
              'lead_status', 
              'sales_process',
              'status_modified_on', 
              'touchbase_campaign_ID', 
              'imported', 
              'bdm_ID', 
              'planner_user_ID', 
              'broker_user_ID', 
              'accountant_user_ID', 
              'conveyancer_user_ID', 
              'lawyer_user_ID', 
              'property_manager_user_ID', 
              'insurance_agency_user_ID',
              'twitter', 
              'youtube', 
              'social_icon_size', 
              'googleplus', 
              'pinterest', 
              'test_account', 
              'fin_planner_ID', 
              'priority_ID', 
              'event_coordinator_user_ID', 
              'modified_by_user_ID', 
              'updated_at', 
              'created_by_user_ID',
              'created_on',
              'date_joined', 
              'sync_status', 
              'avatar', 
              'contact_type', 
              'firstname2', 
              'surname2', 
              'title2', 
              'company_name2', 
              'contact_email', 
              'contact_email2', 
              'mobile2', 
              'website_link2', 
              'agreement_signed',
              'crm_training', 
              'accessed_fusion_crm', 
              'fusion_crm_emailer', 
              'uploaded_contacts', 
              'autopilot_marketing',
              'accessed_property_portal' ,
              'accessed_feed',
              'terms_accepted', 
              'terms_continue', 
              'sales_agent_ID'
            )->where('usertype', 'G');
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

            ->setTableAttribute('class')
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




