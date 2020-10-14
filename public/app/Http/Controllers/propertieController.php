<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\User;
use Illuminate\Http\Request;
use View;
use App\DeveloperProject;
use App\UserFavourite;
use App\Http\DataTables\PropertiesDataTable;

class PropertieController extends Controller
{ 

    protected $demoMode = true;

    protected $datatable = PropertiesDataTable::class;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $table = new DeveloperProject;
        // $get_table = $table->getTableColumnAndTypeList('statuses');
        // echo "<pre>";print_r($get_table);exit;
         $datatable = \App::make($this->datatable);
        return $datatable->render('templates.Properties.index');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

       // $this->validate($request, [
       //      'first_name' => 'required|max:255',               
       //      'last_name'=>'required|max:255',
       //      'title'=>'required|max:255',
       //      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
       //      'secondary_email'=>'required',
       //      'office_phone'=>'required|numeric|',
       //      'mobile_phone'=>'required|numeric|',
       //      'company'=>'nullable',
       //      'website'=>'nullable',
       //      'address_street'=>'nullable',
       //      'address_state'=>'nullable',
       //      'address_city'=>'nullable',
       //      'address_postal_code'=>'nullable',
       //      'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
       // ]); 
               $user = new User;
               $user->first_name = $request->input('first_name');
               $user->last_name = $request->input('last_name');
               $user->title = $request->input('title');
               $user->email = $request->input('email');
               $user->secondary_email = $request->input('secondary_email');
               $user->office_phone = $request->input('office_phone');
               $user->mobile_phone = $request->input('mobile_phone');
               $user->company = $request->input('company');
               $user->website = $request->input('website');
               $user->address_street = $request->input('address_street');
               $user->address_state = $request->input('address_state');
               $user->address_city = $request->input('address_city');
               $user->address_postal_code = $request->input('address_postal_code');
            if ($request->hasfile('profile_image')){
                $file = $request->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $filename = md5(time()).'.'.$extension;
                $file->move(public_path().'\profileimage',$filename);
                $user->profile_image = $request->input.$filename;
                $user->save();
            }
            if($user){
         echo "success";
         $notification = array(
             'message' => ' Developer Data Added Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/projects')->with($notification); 
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $value = request('value');
          $field = request('fieldname');
          $id = request('id');
         // dd($request->all());
         $query = DeveloperProject::where('id',$id)->update([$field => $value]);
    }

    public function addfavourite(Request $request)
    {
          $loginId = request('loginId');
          $developerId = request('developerId');
         // dd($request->all());
         $get_fav = UserFavourite::where('developer_project_ID',$developerId)->where('user_ID',$loginId)->first();
         if(isset($get_fav) && !empty($get_fav)){
             UserFavourite::where('developer_project_ID',$developerId)->where('user_ID',$loginId)->delete();
             return "inactive";
         }else{
             UserFavourite::insert(
                ['developer_project_ID' => $developerId, 'user_ID' => $loginId, 'properties_ID' => 0]
            );
            return "active";
         }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
