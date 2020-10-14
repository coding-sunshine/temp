<?php

namespace Modules\Platform\Accounts\Service;

use Illuminate\Support\Facades\Cache;
use Modules\Platform\Accounts\Entities\Account;
use Modules\Platform\Accounts\Repositories\AccountRepository;

/**
 * Class AccountService
 * @package Modules\Platform\Accounts\Service
 */
class AccountService
{

    private $accountRepo;

    const COMPANY_CONTEXT_SESSION = 'sessAccountContext';

    public function __construct(AccountRepository $repository)
    {
        $this->accountRepo = $repository;
    }

    /**
     * @return mixed
     */
    public function getAccounts()
    {

        $accounts = Cache::remember('all_accounts',10,function (){

            return Account::orderBy('name', 'asc')->where('is_enabled', true)->get();

        });

        return $accounts;
    }

    /**
     * Add Account Id to session
     * @param $id
     * @return null
     */
    public function switchContext($id)
    {

        $account = $this->accountRepo->findWithoutFail($id);

        if (!empty($account)) {
            session()->put(self::COMPANY_CONTEXT_SESSION, $account);
            return $account;
        }
    }

    /**
     * Remove account from session
     */
    public function dropContext()
    {
        session()->remove(self::COMPANY_CONTEXT_SESSION);
    }

}
