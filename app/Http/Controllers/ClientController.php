<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\ClientForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Datatables\ClientsDataTable;

class  ClientController extends Controller
{
    protected $demoMode = true;

    protected $datatable = ClientsDataTable::class;

    protected $formClass = ClientForm::class;
    
    protected $moduleName = 'clients';

     protected $includeViews = [
        'client::clients.index'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    use FormBuilderTrait;

  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        $datatable = \App::make($this->datatable);

      return $datatable->render('templates.Clients.index');
    }
    

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {  
        $view = view('templates.Clients.create');

       $clientForm = $this->form(ClientForm::class, [
            'method' => 'POST',
            'enctype'=>'multipart/form-data',
            'url' => '/clients/store',
            'id' => 'clients_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);
          $view->with('client_form', $clientForm);

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    { 
             $input = $request->validate([
                'first_name' => 'required|max:255',
                'last_name'=>'required|max:255',
                'email'=>'required|email',
                'job_title'=>'required|max:255',
                'department'=>'required|max:255',
                'phone'=>'required|numeric|',
                'mobile'=>'required|numeric|',
                'secondary_email'=>'required',
                'owned_by_type'=>'nullable',
                'owned_by_id'=>'nullable',
                'contact_status_id'=>'nullable',
                'contact_source_id'=>'nullable',
                'fax'=>'nullable',
                'assistant_name'=>'nullable',
                'assistant_phone'=>'nullable',
                'street'=>'nullable',
                'state'=>'nullable',
                'city'=>'nullable',
                'country'=>'nullable',
                'pincode'=>'nullable',
                'notes'=>'nullable',
            ]); 
                $input = $request->all();
                $clients = new Client($input);
                if ($request->hasfile('profile_image')){
                $file = $request->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $filename = md5(time()).'.'.$extension;
                $file->move(public_path().'\profileimage',$filename);
                $clients->profile_image = $request->input.$filename;
                $clients->save();
                 }
               if($clients){
                    echo "success";
                    $notification = array(
                        'message' => ' clients Data Added Successfully',
                        'alert-type' => 'success'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                  return redirect('/clients')->with($notification); 
        }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('clients::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
       dd($id);
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
         $query = Client::where('id',$id)->update([$field => $value]);
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
        $client = Client::find($id); 
        $client->delete(); //delete the client
         if($client){
                    echo "info";
                    $notification = array(
                        'message' => ' clients Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/clients')->with($notification); 
    }

      public function updateedit (Request $request)
    {         
        $id = $request->input('user_id');
        $data = Client::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->phone = $request->phone;
        $data->save();
        if($data){
         echo "success";
         $notification = array(
             'message' => ' clients Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/clients')->with($notification); 
    }

}
  




    

    
   