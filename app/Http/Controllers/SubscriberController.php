<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Krucas\Settings\Facades\Settings;
use App\Http\Forms\SubscriberForm;
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper;
use App\User;
use App\Http\Controllers\Subscribers\Http\Requests\SaveSubscriberRequest;
use Illuminate\Http\Request;
use App\Http\Datatables\SubscribersDataTable;

class SubscriberController extends Controller
{
    protected $demoMode = true;

    protected $datatable = SubscribersDataTable::class;

    protected $formClass = SubscriberForm::class;

    protected $moduleName = 'subscribers';
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

        return $datatable->render('templates.subscribers.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $view = view('templates.subscribers.create');

        $subscriberForm = $this->form(SubscriberForm::class, [
            'method' => 'POST',
            'url' => 'subscribers/store',
            'id' => 'subscribers_form',
            'autocomplete' => 'off',
            // 'model' => [
            //     'message' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_MESSAGE),
            //     'display_class' => Settings::get(SettingsHelper::S_ANNOUNCEMENT_DISPLAY_CLASS)
            // ]
        ]);

        $view->with('subscriber_form', $subscriberForm);

        return $view;
    }
    public function createSubscriber(){

    }
    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $subscribers = new User();

        $subscribers->first_name = request('first_name');
        $subscribers->last_name = request('last_name');
        $subscribers->email = request('email');
        $subscribers->username = request('username');
        $subscribers->title = request('title');
        $subscribers->department = request('department');
        $subscribers->office_phone = request('office_phone');
        $subscribers->mobile_phone = request('mobile_phone');
        $subscribers->home_phone = request('home_phone');
        $subscribers->secondary_email = request('secondary_email');

        $subscribers->save();
        return redirect('/subscribers/create');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('subscribers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('subscribers::edit');
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
        $subscribers = User::find($id); 
        $subscribers->delete(); //delete the subscribers
         if($subscribers){
                    echo "info";
                    $notification = array(
                        'message' => ' subscribers Data Delete Successfully',
                        'alert-type' => 'info'
                         );   
                } else {
                    echo "error";
                    $notification = array(
                    'message' => 'Some problem Has Been Occured',
                     'alert_type'=> 'error'
                  );   
                } 
                return redirect('/subscribers')->with($notification); 
    }


    /**
     * Remove the specified resource from storage.
     * @return Response
     */
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
             'message' => ' subscribers Data update Successfully',
             'alert-type' => 'success'
              );   
     } else {
         echo "error";
         $notification = array(
         'message' => 'Some problem Has Been Occured',
          'alert_type'=> 'error'
       );   
     } 
       return redirect('/subscribers')->with($notification); 
    }
}
