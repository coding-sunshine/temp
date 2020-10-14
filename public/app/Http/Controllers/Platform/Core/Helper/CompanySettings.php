<?php

namespace Modules\Platform\Core\Helper;

use HipsterJazzbo\Landlord\Facades\Landlord;
use Krucas\Settings\Context;
use Modules\Platform\Accounts\Service\AccountService;

class AccountSettings
{

    public static function getAccountPrefix()
    {
        if (\Auth::check()) {
            $user = \Auth::user();

            $accountConext = session()->get(AccountService::COMPANY_CONTEXT_SESSION);

            if ($accountConext != null) {

                return '__' . $accountConext->id;
            }
            if ($user->account != null) {
                return '__' . $user->account->id;;
            }

            return '';
        }
        return '';
    }

    public static function getContextAccountId()
    {

        if (\Auth::check()) {
            $user = \Auth::user();

            $accountConext = session()->get(AccountService::COMPANY_CONTEXT_SESSION);

            $accountId = null;

            if ($accountConext != null) {
                $accountId = $accountConext->id;

            }
            if ($user->account != null) {
                $accountId = $user->account->id;
            }

            return $accountId;
        }

        return null;

    }

    public static function getContext()
    {

        if (\Auth::check()) {
            $user = \Auth::user();

            $accountConext = session()->get(AccountService::COMPANY_CONTEXT_SESSION);

            $accountId = null;

            if ($accountConext != null) {
                $accountId = $accountConext->id;

            }else if ($user->account != null) {
                $accountId = $user->account->id;
            }else{
                $accountId = Landlord::getTenants()->first();
            }

            if($accountId != null ) {

                return new Context(['account_id' => $accountId]);

            }
            return null;
        }

        return null;
    }

    public static function get($key, $default = null, $accountId = null)
    {

        $settingsContext = self::getContext();

        if ($accountId != null && $accountId > 0) {
            $settingsContext = new Context(['account_id' => $accountId]);
        }

        if (!empty($settingsContext)) {
            return \Settings::context($settingsContext)->get($key);
        }

        return \Settings::get($key, $default);

    }

    public static function set($key, $value = null, $accountId = null)
    {
        $settingsContext = self::getContext();

        if ($accountId != null && $accountId > 0) {
            $settingsContext = new Context(['account_id' => $accountId]);
        }

        if (!empty($settingsContext)) {
            \Settings::context($settingsContext)->set($key, $value);
        }

        return \Settings::set($key, $value);
    }

}