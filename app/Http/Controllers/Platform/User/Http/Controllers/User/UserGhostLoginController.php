<?php

namespace Modules\Platform\User\Http\Controllers\User;

use HipsterJazzbo\Landlord\Facades\Landlord;
use Modules\Platform\Accounts\Repositories\AccountRepository;
use Modules\Platform\Accounts\Service\AccountService;
use Modules\Platform\Core\Http\Controllers\AppBaseController;
use Modules\Platform\User\Repositories\UserRepository;

/**
 * Ghost login as selected user
 * Class UserGhostLoginController
 * @package Modules\Platform\User\Http\Controllers
 */
class UserGhostLoginController extends AppBaseController
{

    /**
     * @var UserRepository
     */
    private $userRepo;

    /**
     * @var AccountService
     */
    private $accountService;

    /**
     * UserGhostLoginController constructor.
     * @param UserRepository $repository
     * @param AccountService $accountService
     */
    public function __construct(UserRepository $repository, AccountService $accountService)
    {
        parent::__construct();
        $this->userRepo = $repository;
        $this->accountService = $accountService;
    }

    /**
     * Ghost login as user
     *
     * @param $identifer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login($identifer)
    {
        $user = $this->userRepo->findWithoutFail($identifer);

        if (!\Auth::user()->hasPermissionTo('settings.access')) {
            if ($user->account_id != \Auth::user()->account_id) {
                flash(trans('user::users.unaproved'))->error();
                return redirect(route('settings.users.index'));
            }
        }

        if (empty($user)) {
            flash(trans('user::users.user_not_found'))->error();

            return redirect()->back();
        }

        \Session::put('original_user', \Auth::user()->id);

        // Switch context to user account
        if(!empty($user->account)) {
            Landlord::addTenant('account_id', $user->account->id);
            $this->accountService->switchContext($user->account->id);
        }

        \Auth::login($user);

        flash(trans('user::users.logged_as', ['full_name' => $user->name]))->warning();

        return redirect('/');
    }
}
