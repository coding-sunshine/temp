<?php

namespace Modules\Platform\Accounts\Datatables\Scope;

use HipsterJazzbo\Landlord\Facades\Landlord;
use Modules\Platform\User\Entities\Group;
use Modules\Platform\User\Entities\User;
use Nwidart\Modules\Facades\Module;
use Yajra\DataTables\Contracts\DataTableScope;

/**
 * Class CurrentAccountScope
 * @package Modules\Platform\Accounts\Datatable\Scope
 */
class CurrentAccountScope implements DataTableScope
{

    public function apply($query)
    {
        $user = \Auth::user();

        if(!$user->hasPermissionTo('settings.access')){
            $query->where('account_id','=',Landlord::getTenants()->first());
        }

        return $query;
    }
}
