<?php

namespace Modules\Platform\User\Repositories;

use Modules\Platform\Core\Repositories\PlatformRepository;
use Modules\Platform\Settings\Entities\Language;
use Modules\Platform\User\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UserRepository
 * @package Modules\Platform\User\Repositories
 */
class UserRepository extends PlatformRepository
{
    public function model()
    {
        return User::class;
    }

    /**
     * Count users for account
     *
     * @param $account
     * @return mixed
     */
    public function countUsersForAccount($account){

        return $this->findWhere([
            'current_account' => $account->id
        ])->count();

    }
}
