<?php

namespace Modules\Platform\Accounts\Http\Controllers;

use Modules\Platform\Accounts\Service\AccountService;
use Modules\Platform\Core\Http\Controllers\AppBaseController;

class AccountContextController extends AppBaseController
{

    private $accountService;


    public function __construct(AccountService $accountService)
    {
        parent::__construct();

        $this->accountService = $accountService;

    }

    public function switchAccount($id)
    {

        $account = $this->accountService->switchContext($id);

        \Flash::warning(trans('accounts::accounts.account_context_changed', ['account' => $account->name]));

        return redirect()->back();
    }

    public function dropContext()
    {

        $this->accountService->dropContext();

        \Flash::warning(trans('accounts::accounts.account_context_droped'));

        return redirect()->back();
    }
}