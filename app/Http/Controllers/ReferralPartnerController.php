<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\ReferralPartnerForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\User;
use Illuminate\Http\Request;
use App\Http\DataTables\ReferralPartnersDataTable;

class ReferralPartnerController extends Controller
{
   protected $demoMode = true;

    protected $datatable = ReferralPartnersDataTable::class;

    protected $formClass = ReferralPartnerForm::class;




    protected $moduleName = 'referralpatners';
    /**
     * Display a listing of the resource.
     * @return Response
     */
    use FormBuilderTrait;
    public function index()
    {
        $datatable = \App::make($this->datatable);

        return $datatable->render('templates.referralpartners.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.referralpartners.create');

        $refpartnerForm = $this->form(ReferralPartnerForm::class, [
            'method' => 'POST',
            'url' => '/referral-partners/store',
            'id' => 'afiliates_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('refpartner_form', $refpartnerForm);

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
        return view('referralpartners::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('referralpartners::edit');
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
        $referral = User::find($id); 
        $referral->delete(); //delete the referral
         if($referral){
                    echo "info";
                    $notification = array(
                        'message' => ' referralpartners Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/referral-partners')->with($notification); 
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
             'message' => ' referralpartners Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/referral-partners')->with($notification); 
    }
}
