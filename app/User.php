<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'username','password','is_active','current_account', 'is_superAdmin', 
        'title', 'department', 'office_phone', 'mobile_phone', 'home_phone','signature','fax',
        'secondary_email','left_panel_hide','address_street','address_city','address_state',
        'address_country','address_postal_code','time_format_id','date_format_id','time_zone',
        'profile_image','access_to_all_entity','company','website',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
	 * - also used in auth Login to check if allowed to login.
	 * @var array
	 */
	var $companyUsertypes = array(
		'P' => 'Admin',
		'G' => 'Affiliate',
		'A' => 'Subscriber',
		'S' => 'Sales Agent',
		'D' => 'Developer',
		'Q' => 'Property Assistant',
		'K' => 'BDM',
		'O' => 'Contact',
		'Y' => 'Property Admin',
		'L' => 'Financial Planner',
		'N' => 'Broker',
		'V' => 'Conveyancer',
		'H' => 'Accountant',
		'J' => 'Property Mgr.',
		'R' => 'Event Coordinator',
		'I' => 'Insurance', // Property Data Admin
	);

  function getUserListArray($usertypeCode = '', $force_me_add_to_list = FALSE, $limit = 0, $active = 0){
    $usertypeCodes = '';
    $query = DB::table('users')->join('statuses','users.usertype_status','=','statuses.ID');
    if($usertypeCode == '*' || $usertypeCode == 'all') 
		{
			$usertypeCode = array('C','A','S','P','O','L','N','V','J','H','I','R');
			
		}

		if(is_array($usertypeCode)) 
		{
			$usertypeCodes = "'".implode('\',\'',$usertypeCode)."'";
        } 
        $usertypesWithCompany = array_keys($this->companyUsertypes);
        $query->select('users.ID'); 

        if(!is_array($usertypeCode) && strlen($usertypeCode) == 1) {
			if(in_array($usertypeCode,$usertypesWithCompany)) {
				if ($usertypeCode == 'D'){
					$query->select(DB::raw('IF(`company_name` != "",
							CONCAT(usertype," | ",`company_name`," (",firstname," ",surname,") | ", statuses.label," (",users.state,")"),
							CONCAT(usertype," | "," - ",statuses.label," - ",`firstname`," ", `surname`," (",users.state,")"))
							 as "value"'));
					$query->orderBy('usertype');
					$query->orderBy('company_name');
					$query->orderBy('firstname');
				}else{
					$query->select(DB::raw('IF(`company` != "",
							CONCAT(usertype," | ",`company`," (",firstname," ",surname,") | ", statuses.label," (",users.state,")"),
							CONCAT(usertype," | "," - ",statuses.label," - ",`firstname`," ", `surname`," (",users.state,")"))
                             as "value"'));
                    $query->orderBy('usertype');
					$query->orderBy('company');
					$query->orderBy('firstname');
			
				}

			}

			//		else if($usertypeCode == 'D') {
			//			$select->'company';
			//			$this->db->order_by('company');
			//		}
			else {
				// do not display company
				$query->select(DB::raw('CONCAT(usertype," | ",firstname," ",surname, " | ", statuses.label) as "value"'));

                $query->orderBy('usertype');
                $query->orderBy('firstname');
			}
        }
        else {
			// do not display company
			$query->select(DB::raw('CONCAT(usertype," | ",firstname," ",surname, " | ", statuses.label) as "value"'));

            $query->orderBy('usertype');
            $query->orderBy('firstname');
		}
        if (!empty($active)){
            $query->where('enabled', 1);
            $query->select('');
        }    
       $res =  $query->get(); 
       
     	
    return $res;
  }

}
