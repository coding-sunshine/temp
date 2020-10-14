<?php

namespace Modules\Platform\Core\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Modules\Platform\Core\Helper\SettingsHelper;

class AppBaseController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
