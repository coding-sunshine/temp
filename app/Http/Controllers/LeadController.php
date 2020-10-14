<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\LeadForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\Lead;
use App\User;
use App\Http\DataTables\LeadsDataTable;

class LeadController extends Controller
{
  protected $demoMode = true;

    protected $datatable = LeadsDatatable::class;

    protected $formClass = LeadForm::class;

    protected $storeRequest = SaveLeadRequest::class;

    protected $updateRequest = UpdateLeadRequest::class;

    protected $repository = LeadRepository::class;

    protected $moduleName = 'leads';

    protected $includeViews = [
        'lead::leads.index'
    ];
    /**
     * AnnouncementController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    use FormBuilderTrait;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $datatable = \App::make($this->datatable);

        return $datatable->render('templates.leads.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
       $view = view('templates.Leads.create');

        $leadForm = $this->form(LeadForm::class, [
            'method' => 'POST',
            'url' => '/leads/store',
            'enctype'=>'multipart/form-data',
            'id' => 'leads_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('lead_form', $leadForm);

        return $view;
    }

    public function createLead(){

    }

    /**
     * Store a newly created resource in storage.
     * @param SaveLeadRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    { 
         $input = $request->validate([
                'first_name' => 'required|max:255',
                'last_name'=>'required|max:255',
                'email'=>'required|email',
                'job_title'=>'required|max:255',
                'phone'=>'required|numeric|',
                'mobile'=>'required|numeric|',
                'secondary_email'=>'required',
                'fax'=>'nullable',
                'skype'=>'nullable',
                'company'=>'nullable',
                'no_of_employees'=>'nullable',
                'website'=>'nullable',
                'annual_revenue'=>'nullable',
                'description'=>'required',
                'company_id'=>'nullable',
                
            ]); 
                $input = $request->all();
                $Lead = new Lead($input);
                if ($request->hasfile('profile_image')){
                $file = $request->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $filename = md5(time()).'.'.$extension;
                $file->move(public_path().'\profileimage',$filename);
                $Lead->profile_image = $request->input.$filename;
                $Lead->save();
            }
                 if($Lead){
                    echo "success";
                    $notification = array(
                        'message' => ' Leads Data Added Successfully',
                        'alert-type' => 'success'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
            
                return redirect('/leads')->with($notification); 
        }
    

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('leads::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('leads::edit');
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
         $query = Lead::where('id',$id)->update([$field => $value]);
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
        $leads = Lead::find($id); 
        $leads->delete(); //delete the leads
         if($leads){
                    echo "success";
                    $notification = array(
                        'message' => ' Leads Data Delete Successfully',
                        'alert-type' => 'success'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/leads')->with($notification); 
    }

     public function updateedit (Request $request)
    {         
        $id = $request->input('user_id');
        $data = Lead::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->phone = $request->phone;
        $data->save();
        if($data){
         echo "success";
         $notification = array(
             'message' => ' Leads Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/leads')->with($notification); 
    }
}
