<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class LoginUserRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * Custom error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
        ];
    }
}