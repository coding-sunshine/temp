<?php

namespace Modules\Platform\Accounts\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CurrencySettingsRequest
 * @package Modules\Platform\Settings\Http\Requests
 */
class AccountRequest extends Request
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
            'name' => 'required',
            'user_limit' => 'nullable|numeric|min:1',
            'storage_limit' => 'nullable|numeric|min:1'
        ];
    }
}
