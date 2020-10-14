<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\ContactForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\Contact;
use App\User;
use App\Http\DataTables\ContactsDataTable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $demoMode = true;

    protected $datatable = ContactsDataTable::class;

    protected $formClass = LeadForm::class;

    protected $storeRequest = SaveLeadRequest::class;

    protected $updateRequest = UpdateLeadRequest::class;

    protected $repository = LeadRepository::class;

    protected $moduleName = 'leads';

    
    protected $includeViews = [
        'contact::contacts.index'
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

        return $datatable->render('templates.contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.contacts.create');
        $contactForm = $this->form(ContactForm::class, [
            'method' => 'POST',
            'url' => 'contacts/store',
            'id' => 'contacts_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('contact_form', $contactForm);

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $subscribers = new Contact();

        $subscribers->first_name = request('first_name');
        $subscribers->last_name = request('last_name');
        $subscribers->email = request('email');
        $subscribers->job_title = request('job_title');
        $subscribers->department = request('department');
        $subscribers->phone = request('phone');
        $subscribers->mobile = request('mobile');
        $subscribers->secondary_email = request('secondary_email');
        $subscribers->assistant_name = request('assistant_name');
        $subscribers->assistant_phone = request('assistant_phone');

        $subscribers->save();
        return redirect('/contacts/create');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('contacts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('contacts::edit');
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
         $query = Contact::where('id',$id)->update([$field => $value]);
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
        $contacts = Contact::find($id); 
        $contacts->delete(); //delete the contacts
         if($contacts){
                    echo "info";
                    $notification = array(
                        'message' => ' contacts Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/contacts')->with($notification); 
    }

        public function updateedit (Request $request)
    {         
        $id = $request->input('user_id');
        $data = Contact::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->phone = $request->phone;
        $data->save();
        if($data){
         echo "success";
         $notification = array(
             'message' => ' contacts Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/contacts')->with($notification); 
    }
}

