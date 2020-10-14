<?php

namespace Platform\Core\Helper;

use HipsterJazzbo\Landlord\Facades\Landlord;
use Krucas\Settings\Facades\Settings;


/**
 *
 * Settings Helper
 *
 * Class SettingsHelper
 * @package Modules\Platform\Core\Helper
 */
class SettingsHelper
{
    const S_COMPANY_NAME = 's_account_name';

    const S_COMPANY_ADDRESS_ = 's_account_address';

    const S_COMPANY_CITY = 's_account_city';

    const S_COMPANY_STATE = 's_account_state';

    const S_COMPANY_POSTAL_CODE = 's_account_postal_code';

    const S_COMPANY_COUNTRY = 's_account_country';

    const S_COMPANY_PHONE = 's_account_phone';

    const S_COMPANY_FAX = 's_account_fax';

    const S_COMPANY_WEBSITE = 's_account_website';

    const S_COMPANY_VAT_ID = 's_account_vat_id';

    const S_DISPLAY_SHOW_LOGO_ON_LOGIN = 's_display_show_logo_on_login';

    const S_DISPLAY_SHOW_LOGO_IN_APPLICATION = 's_display_show_logo_in_application';

    const S_DISPLAY_SHOW_LOGO_IN_PDF = 's_display_show_logo_in_pdf';

    const S_DISPLAY_APPLICATION_NAME = 's_display_application_name';

    const S_DISPLAY_LOGO_UPLOAD = 's_display_logo_upload';

    const S_DISPLAY_PDF_LOGO_UPLOAD = 's_display_pdf_logo_upload';

    const S_DISPLAY_LOGIN_BACKGROUND_IMAGE = 's_display_login_background_image';

    const S_DISPLAY_SIDEBAR_BACKGROUND = 's_display_sidebar_background';

    const S_ANNOUNCEMENT_MESSAGE = 's_announcement_message';

    const S_ANNOUNCEMENT_DISPLAY_CLASS = 's_announcement_display_class';

    const CONST_LOGO_UPLOAD_PATH = 'storage/files/logo/';

    /**
     * Return account settings
     * @return array
     */
    public static function accountSettings()
    {
        return [
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
        ];
    }


    public static function getApplicationTitle()
    {

        $context = AccountSettings::getContext();

        if (!empty($context)) {
            return AccountSettings::get(\App\Http\Controllers\Platform\Core\Helper\SettingsHelper::S_DISPLAY_APPLICATION_NAME, config('app.name'));
        }

        return config('app.name');
    }

    /**
     * @return string
     */
    public static function siebarBackground()
    {
        $styles = '';

        $backgroundImage = AccountSettings::get(SettingsHelper::S_DISPLAY_SIDEBAR_BACKGROUND, 'orange.jpg');

        if ($backgroundImage != '') {
            $styles = "background: url('/bg/sidebar/" . $backgroundImage . "') no-repeat no-repeat; background-size: cover;";
        }

        return $styles;
    }

    /**
     * Display application logo if exist
     */
    public static function displayLogo()
    {
        $logo = AccountSettings::get(SettingsHelper::S_DISPLAY_LOGO_UPLOAD);

        if ($logo != '') {
            return '<img class="application-logo" src="' . asset($logo) . '" />';
        }
    }

    public static function logoPath()
    {
        $logo = AccountSettings::get(SettingsHelper::S_DISPLAY_LOGO_UPLOAD);

        if ($logo != '') {
            return '<img class="application-logo" src="' . public_path($logo) . '" />';
        }
    }

    public static function pdfLogoPath(){
        $logo = AccountSettings::get(SettingsHelper::S_DISPLAY_PDF_LOGO_UPLOAD);

        if ($logo != '') {
            return '<img class="application-logo" src="' . public_path($logo) . '" />';
        }
    }
}
