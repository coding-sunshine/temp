<?php

namespace Modules\Platform\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Krucas\Settings\Facades\Settings;
use Modules\Platform\Core\Http\Controllers\AppBaseController;
use Modules\Platform\Core\Repositories\AttachmentsRepository;
use Modules\Platform\User\Repositories\UserRepository;
use Modules\Platform\Accounts\Entities\Account;
use Modules\Platform\Accounts\Entities\AccountsUserRole;

class SettingsController extends AppBaseController
{

    private $attachmentRepo;

    private $userRepo;

    public function __construct(AttachmentsRepository $repository, UserRepository $userRepository)
    {
        parent::__construct();

        $this->attachmentRepo = $repository;
        $this->userRepo       = $userRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = $this->user();
        $account = Account::find($user->current_account);
        $uuid = AccountsUserRole::where([
            'user_id'   => $user->id,
            'account_id' => $account->id
        ])->firstOrFail();

        debug($uuid);

        return view('settings::index')
            ->with('user',$user)
            ->with('account',$account)
            ->with('accountFileSize',$this->attachmentRepo->countFileSizeForAccountFormatted($uuid))
            ->with('currentUsers',   $this->userRepo->countUsersForAccount($uuid));
    }
}
