<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    # use \App\Http\Requests\Response;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                     => 'required|max:200',
            'email'                    => 'required|email|unique:users,email',
            'mobile'                   => 'required|min:10|regex:/[0-9]/',
            'password'                 => 'required|confirmed|min:6',
        ];
    }
}
