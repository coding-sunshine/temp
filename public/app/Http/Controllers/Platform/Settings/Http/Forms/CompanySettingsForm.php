<?php

namespace Modules\Platform\Settings\Http\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class AccountSettingsForm
 * @package Modules\Platform\Settings\Http\Forms
 */
class AccountSettingsForm extends Form
{
    public function buildForm()
    {
        $this->add('account_name', 'text', [
            'label' => trans('settings::account_settings.account_name'),
        ]);
        $this->add('address', 'textarea', [
            'label' => trans('settings::account_settings.address'),
        ]);
        $this->add('city', 'text', [
            'label' => trans('settings::account_settings.city'),
        ]);
        $this->add('state', 'text', [
            'label' => trans('settings::account_settings.state'),
        ]);
        $this->add('postal_code', 'text', [
            'label' => trans('settings::account_settings.postal_code'),
        ]);
        $this->add('country', 'text', [
            'label' => trans('settings::account_settings.country'),
        ]);
        $this->add('phone', 'text', [
            'label' => trans('settings::account_settings.phone'),
        ]);
        $this->add('fax', 'text', [
            'label' => trans('settings::account_settings.fax'),
        ]);
        $this->add('website', 'text', [
            'label' => trans('settings::account_settings.website'),
        ]);
        $this->add('vat_id', 'text', [
            'label' => trans('settings::account_settings.vat_id'),
        ]);

        $this->add('submit', 'submit', [
            'label' => trans('settings::account_settings.update_settings'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);
    }
}
