<?php

namespace Modules\Platform\Settings\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class SaveAccountSettingsRequest
 * @package Modules\Platform\Settings\Http\Requests
 */
class SaveAccountSettingsRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'account_name' => 'required',
        ];
    }
}
