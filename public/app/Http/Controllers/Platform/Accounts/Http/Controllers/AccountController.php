<?php

namespace Modules\Platform\Accounts\Http\Controllers;

use Modules\Platform\Accounts\Datatables\AccountsDatatable;
use Modules\Platform\Accounts\Entities\Account;
use Modules\Platform\Accounts\Http\Forms\AccountForm;
use Modules\Platform\Accounts\Http\Requests\AccountRequest;
use Modules\Platform\Accounts\Repositories\AccountRepository;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;
use Modules\Platform\Core\Http\Controllers\SettingsCrudController;

class AccountController extends ModuleCrudController
{
    public function __construct()
    {
        parent::__construct();
    }

    protected $settingsMode = true;

    protected $disableTabs = true;

    protected $moduleName = 'settings';

    protected $permissions = [
        'browse' => 'settings.access',
        'create' => 'settings.access',
        'update' => 'settings.access',
        'destroy' => 'settings.access'
    ];

    protected $entityClass = Account::class;

    protected $datatable = AccountsDatatable::class;

    protected $formClass = AccountForm::class;

    protected $storeRequest = AccountRequest::class;

    protected $updateRequest = AccountRequest::class;

    protected $repository = AccountRepository::class;

    protected $showFields = [
        'details' => [
            'name' => ['type' => 'text'],
            'user_limit' => ['type' => 'number'],
            'storage_limit' => ['type' => 'number'],
            'is_enabled' => ['type' => 'checkbox'],
            'description' => ['type' => 'text', 'col-class' => 'col-lg-12'],
        ]
    ];


    protected $languageFile = 'accounts::accounts';


    protected $routes = [
        'index' => 'settings.accounts.index',
        'create' => 'settings.accounts.create',
        'show' => 'settings.accounts.show',
        'edit' => 'settings.accounts.edit',
        'store' => 'settings.accounts.store',
        'destroy' => 'settings.accounts.destroy',
        'update' => 'settings.accounts.update'
    ];
}
