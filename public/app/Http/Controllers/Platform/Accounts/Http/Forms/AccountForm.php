<?php

namespace Modules\Platform\Accounts\Http\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class AccountForm
 *
 * @package Modules\Platform\Accounts\Http\Forms
 */
class AccountForm extends Form
{
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => trans('accounts::accounts.form.name'),
        ]);
        $this->add('user_limit', 'text', [
            'label' => trans('accounts::accounts.form.user_limit'),
        ]);
        $this->add('storage_limit', 'text', [
            'label' => trans('accounts::accounts.form.storage_limit'),
        ]);
        $this->add('is_enabled', 'checkbox', [
            'label' => trans('accounts::accounts.form.is_enabled'),
        ]);
        $this->add('description', 'textarea', [
            'label' => trans('accounts::accounts.form.description'),
        ]);

        $this->add('submit', 'submit', [
            'label' => trans('accounts::accounts.form.save'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);
    }
}
