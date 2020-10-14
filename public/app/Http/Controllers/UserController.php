<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Forms\UserForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\Http\DataTables\UsersDataTable;
use DB;
use Hash;

class UserController extends Controller
{ 

    protected $demoMode = true;

    protected $datatable =UsersDataTable::class;

    protected $moduleName = 'User';

    protected $formClass = UserForm::class;

    function __construct()
    {
     
    }
    use FormBuilderTrait;

    public function index()
    {
        $datatable = \App::make($this->datatable);

        return $datatable->render('templates.users.index');
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.users.create');

        $userForm = $this->form(UserForm::class, [
            'method' => 'POST',
            'enctype'=>'multipart/form-data',
            'url' => '/users/store',
            'id' => 'user_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);
        $view->with('user_form', $userForm);

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',               
            'last_name'=>'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username'=>'required|max:255',
            'password' => 'required|min:8',
            'title'=>'required|max:255',
            'department'=>'required|max:255',
            'office_phone'=>'required|numeric|',
            'mobile_phone'=>'required|numeric|',
            'home_phone'=>'required|numeric|',
            'signature'=>'nullable',
            'secondary_email'=>'required',
            'fax'=>'nullable',
            'address_street'=>'nullable',
            'address_state'=>'nullable',
            'address_city'=>'nullable',
            'address_country'=>'nullable',
            'address_postal_code'=>'nullable',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
       ]); 
               $user = new User;
               $user->first_name = $request->input('first_name');
               $user->last_name = $request->input('last_name');
               $user->title = $request->input('title');
               $user->department = $request->input('department');
               $user->office_phone = $request->input('office_phone');
               $user->mobile_phone = $request->input('mobile_phone');
               $user->home_phone = $request->input('home_phone');
               $user->signature = $request->input('signature');
               $user->secondary_email = $request->input('secondary_email');
               $user->fax = $request->input('fax');
               $user->address_street = $request->input('address_street');
               $user->address_state = $request->input('address_state');
               $user->address_city = $request->input('address_city');
               $user->address_country = $request->input('address_country');
               $user->address_postal_code = $request->input('address_postal_code');
               $user->username = $request->input('username');
               $user->email = $request->input('email');
               $user->password = Hash::make($request->input('password'));
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
             'message' => ' Users Data Added Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/users')->with($notification); 
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function Update(Request $request)
    {    
          $value = request('value');
          $field = request('fieldname');
          $id = request('id');
         // dd($request->all());
         $query = User::where('id',$id)->update([$field => $value]);

    }

    public function Updatestatus(Request $request)
    {    
          $value = request('value');
          $field = request('fieldname');
          $id = request('id');
          $query = User::where('id',$id)->update([$field => $value]);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $Users = User::find($id); 
        $Users->delete(); //delete the client
         if($Users){
                    echo "info";
                    $notification = array(
                        'message' => ' users Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/users')->with($notification); 
    }

     public function updateedit (Request $request)
    {         
        $id = $request->input('user_id');
        $data = User::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->mobile_phone = $request->mobile_phone;
        $data->office_phone = $request->office_phone;
        $data->save();
        if($data){
         echo "success";
         $notification = array(
             'message' => ' users Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/users')->with($notification); 
    }

}