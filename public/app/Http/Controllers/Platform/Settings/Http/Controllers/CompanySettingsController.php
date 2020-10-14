<?php

namespace Modules\Platform\Settings\Http\Controllers;


use Kris\LaravelFormBuilder\FormBuilderTrait;
use Modules\Platform\Core\Helper\AccountSettings;
use Modules\Platform\Core\Helper\SettingsHelper;
use Modules\Platform\Core\Http\Controllers\AppBaseController;
use Modules\Platform\Settings\Http\Forms\AccountSettingsForm;
use Modules\Platform\Settings\Http\Requests\SaveAccountSettingsRequest;

/**
 *
 * Update Account Settings
 *
 * Class AccountSettingsController
 * @package Modules\Platform\Settings\Http\Controllers
 */
class AccountSettingsController extends AppBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    use FormBuilderTrait;

    /**
     * Show form and load values
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $view = view('settings::account_settings.account_settings');

        $accountSettingsForm = $this->form(AccountSettingsForm::class, [
            'method' => 'POST',
            'url' => route('settings.account_settings'),
            'id' => 'account_settings_form',
            'model' => [
                'account_name' => AccountSettings::get(SettingsHelper::S_COMPANY_NAME),
                'address' => AccountSettings::get(SettingsHelper::S_COMPANY_ADDRESS_),
                'city' => AccountSettings::get(SettingsHelper::S_COMPANY_CITY),
                'state' => AccountSettings::get(SettingsHelper::S_COMPANY_STATE),
                'postal_code' => AccountSettings::get(SettingsHelper::S_COMPANY_POSTAL_CODE),
                'country' => AccountSettings::get(SettingsHelper::S_COMPANY_COUNTRY),
                'phone' => AccountSettings::get(SettingsHelper::S_COMPANY_PHONE),
                'fax' => AccountSettings::get(SettingsHelper::S_COMPANY_FAX),
                'website' => AccountSettings::get(SettingsHelper::S_COMPANY_WEBSITE),
                'vat_id' => AccountSettings::get(SettingsHelper::S_COMPANY_VAT_ID)
            ]
        ]);

        $view->with('account_settings_form', $accountSettingsForm);

        return $view;
    }

    /**
     * Upda
     * @param SaveAccountSettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SaveAccountSettingsRequest $request)
    {
        $form = $this->form(AccountSettingsForm::class);

        // Update Settings In Database
        AccountSettings::set(SettingsHelper::S_COMPANY_NAME, $form->getField('account_name')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_ADDRESS_, $form->getField('address')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_CITY, $form->getField('city')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_STATE, $form->getField('state')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_POSTAL_CODE, $form->getField('postal_code')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_COUNTRY, $form->getField('country')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_PHONE, $form->getField('phone')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_FAX, $form->getField('fax')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_WEBSITE, $form->getField('website')->getRawValue());
        AccountSettings::set(SettingsHelper::S_COMPANY_VAT_ID, $form->getField('vat_id')->getRawValue());

        flash(trans('settings::account_settings.settings_updated'))->success();

        return redirect(route('settings.account_settings'));
    }
}
