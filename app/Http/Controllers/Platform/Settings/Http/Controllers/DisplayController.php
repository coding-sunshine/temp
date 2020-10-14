<?php

namespace Modules\Platform\Settings\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Modules\Platform\Core\Helper\AccountSettings;
use Modules\Platform\Core\Helper\SettingsHelper;
use Modules\Platform\Core\Http\Controllers\AppBaseController;
use Modules\Platform\Settings\Http\Forms\DisplaySettingsForm;
use Modules\Platform\Settings\Http\Requests\SaveDisplaySettingsRequest;

/**
 *
 * Update Display Settings
 *
 * Class DisplayController
 * @package Modules\Platform\Settings\Http\Controllers
 */
class DisplayController extends AppBaseController
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
        $view = view('settings::display.display');

        $displayForm = $this->form(DisplaySettingsForm::class, [
            'method' => 'POST',
            'url' => route('settings.display'),
            'id' => 'display_settings_form',
            'model' => [
                SettingsHelper::S_DISPLAY_APPLICATION_NAME => AccountSettings::get(
                    SettingsHelper::S_DISPLAY_APPLICATION_NAME,
                    'BAP Platform'
                ),
                SettingsHelper::S_DISPLAY_SHOW_LOGO_IN_APPLICATION => AccountSettings::get(
                    SettingsHelper::S_DISPLAY_SHOW_LOGO_IN_APPLICATION,
                    false
                ),
                SettingsHelper::S_DISPLAY_SHOW_LOGO_IN_PDF => AccountSettings::get(
                    SettingsHelper::S_DISPLAY_SHOW_LOGO_IN_PDF,
                    false
                ),
                SettingsHelper::S_DISPLAY_SIDEBAR_BACKGROUND => AccountSettings::get(
                    SettingsHelper::S_DISPLAY_SIDEBAR_BACKGROUND,
                    ''
                ),
            ]
        ]);

        $view->with('display_settings_form', $displayForm);

        return $view;
    }

    /**
     *
     * Update Setting
     *
     * @param SaveDisplaySettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SaveDisplaySettingsRequest $request)
    {

        if (config('bap.demo')) {
            flash(trans('core::core.you_cant_do_that_its_demo'))->error();
            return redirect()->back();
        }

        $form = $this->form(DisplaySettingsForm::class);

        foreach ($form->getFields() as $field) {
            if ($field->getName() != 's_display_logo_upload' && $field->getName() != 's_display_pdf_logo_upload') {
                AccountSettings::set($field->getName(), $field->getRawValue());
            }
        }

        $file = $form->getField('s_display_logo_upload');

        if ($file->getRawValue() != null) {
            $uploaded = $file->getRawValue();

            $logoName = 'logo'.AccountSettings::getAccountPrefix().'.'.$uploaded->getClientOriginalExtension();

            $uploadSuccess = $uploaded->move(SettingsHelper::CONST_LOGO_UPLOAD_PATH, $logoName);

            if ($uploadSuccess) {
                AccountSettings::set(SettingsHelper::S_DISPLAY_LOGO_UPLOAD, SettingsHelper::CONST_LOGO_UPLOAD_PATH.$logoName);
            }
        }

        $file = $form->getField('s_display_pdf_logo_upload');

        if ($file->getRawValue() != null) {
            $uploaded = $file->getRawValue();

            $logoName = 'logo_pdf_'.AccountSettings::getAccountPrefix().'.'.$uploaded->getClientOriginalExtension();

            $uploadSuccess = $uploaded->move(SettingsHelper::CONST_LOGO_UPLOAD_PATH, $logoName);

            if ($uploadSuccess) {
                AccountSettings::set(SettingsHelper::S_DISPLAY_PDF_LOGO_UPLOAD, SettingsHelper::CONST_LOGO_UPLOAD_PATH.$logoName);
            }
        }

        flash(trans('settings::display.settings_updated'))->success();

        return redirect(route('settings.display'));
    }
}
