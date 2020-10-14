<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\BdmForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\User;
use Illuminate\Http\Request;
use App\Http\Datatables\BdmDataTable;

class  BdmController extends Controller
{

    protected $demoMode = true;

    protected $datatable = BdmDataTable::class;

    protected $formClass = BdmForm::class;




    protected $moduleName = 'bdm';
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

        return $datatable->render('templates.bdm.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.bdm.create');
        $bdmForm = $this->form(BdmForm::class, [
            'method' => 'POST',
            'url' => 'bdm/store',
            'id' => 'bdm_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('bdm_form', $bdmForm);

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('bdm::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('bdm::edit');
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
        $bdm = User::find($id); 
        $bdm->delete(); //delete the bdm
         if($bdm){
                    echo "info";
                    $notification = array(
                        'message' => ' bdm Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/bdm')->with($notification); 
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
             'message' => ' bdm Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/bdm')->with($notification); 
    }
}



