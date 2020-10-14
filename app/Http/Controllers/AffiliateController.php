<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\AfiliateForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\User;
use Illuminate\Http\Request;
use App\Http\DataTables\AfiliatesDataTable;

class AffiliateController extends Controller
{
    protected $demoMode = true;

    protected $datatable = AfiliatesDataTable::class;

    protected $formClass = AfiliateForm::class;




    protected $moduleName = 'Afiliates';
    protected $modelName = '';

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
    }

    use FormBuilderTrait;

    public function index()
    {   
        
        $datatable = \App::make($this->datatable);

        return $datatable->render('templates.afiliates.index');
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.afiliates.create');

        $afiliateForm = $this->form(AfiliateForm::class, [
            'method' => 'POST',
            'url' => '/afiliates/save',
            'id' => 'afiliates_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('afiliate_form', $afiliateForm);

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $afiliates = new User();

        $afiliates->first_name = request('first_name');
        $afiliates->last_name = request('last_name');
        $afiliates->email = request('email');
        $afiliates->job_title = request('title');
        $afiliates->department = request('department');
        $afiliates->office_phone = request('office_phone');
        $afiliates->mobile_phone = request('mobile_phone');
        $afiliates->home_phone = request('home_phone');
        $afiliates->secondary_email = request('secondary_email');

        $afiliates->save();
        return redirect('/afiliates/create');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('afiliates::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function action (Request $request)
    {
        dd('uhfuhsdufhu');
        return view('afiliates::edit');
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
         $query = User::where('id',$id)->update([$value => $field]);

    }

     public function Updatestatus(Request $request)
    {    
          $value = request('value');
          $field = request('fieldname');
          $id = request('id');
          $query = User::where('id',$id)->update([$field => $value]);
    }

     public function Imageupdate(Request $request)
    {    
          $id = request('id');
          $field = request('fieldname');
          $id = request('id');
          $query = User::where('id',$id)->update([$field => $value]);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
//     public function Delete(Request $request)
//     {   
//         $id = request('id');
//         $affiliates = User::find($id); 
//         $affiliates->delete(); //delete the affiliates
//          if($affiliates){
//                     echo "info";
//                     $notification = array(
//                         'message' => ' affiliates Data Delete Successfully',
//                         'alert-type' => 'info'
//                          );   
//                 } else {
//                     echo "error";
//                     $notification = array(
//                     'message' => 'Some problem Has Been Occured',
//                      'alert_type'=> 'error'
//                   );   
//                 } 
//                 return redirect('/affiliates')->with($notification); 
// }

     public function destroy (Request $request)
    {   
        $id = request('id');
        $affiliates = User::find($id); 
        $affiliates->delete(); //delete the affiliates
         if($affiliates){
                    echo "info";
                    $notification = array(
                        'message' => ' affiliates Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/affiliates')->with($notification); 
    }

     // public function Delete(Request $request)
    // {   
    //     $id = request('id');
    //     $affiliates = User::find($id); 
    //     $affiliates->delete(); //delete the affiliates
    //      if($affiliates){
    //                 echo "info";
    //                 $notification = array(
    //                     'message' => ' affiliates Data Delete Successfully',
    //                     'alert-type' => 'info'
    //                      );   
    //             } else {
    //                 echo "error";
    //                 $notification = array(
    //                 'message' => 'Some problem Has Been Occured',
    //                  'alert_type'=> 'error'
    //               );   
    //             } 
    //             return redirect('/affiliates')->with($notification); 
    // }

     public function get(Request $request)
    {   
        $id = request('id');
        $user = User::where('id', $id)->first();
         return $user;
}

        public function updateedit (Request $request)
    {         
        $id = $request->input('id');
         dd($id);
        $data = User::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->mobile_phone = $request->mobile_phone;
        $data->office_phone = $request->office_phone;
         // if ($request->hasfile('profile_image')){
         //        $file = $request->file('profile_image');
         //        $extension = $file->getClientOriginalExtension();
         //        $filename = md5(time()).'.'.$extension;
         //        $file->move(public_path().'\profileimage',$filename);
         //        $data->profile_image = $request->input.$filename;
         //        $data->save();
         //    }
         $data->save();
        if($data){
         echo "success";
         $notification = array(
             'message' => ' affiliates Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/affiliates')->with($notification); 
    }

}