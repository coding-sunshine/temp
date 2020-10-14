<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $demoMode = true;

    protected $datatable;

    protected $formClass;

    protected $moduleName;

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // debug_pre(Route::currentRouteName());
        $this->middleware('auth');

    }

    public function navTabs(){
        $navTabs = [
            'dashboard' => ['dashboard'],
            'accounts'  => ['leads','contacts','clients','affiliates','subscribers','bdm','sales-agents','referral-partners'],
            'marketing' => ['branding','websites']
        ];
    }

    public function user()
    {
        return \Auth::user();
    }


}

