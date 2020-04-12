<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Hash; use App\User;

class SignInRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    /**
     * Get the custom validation rules that apply to the request.
     *
     * @return Instance of $validator
     */
    public function withValidator($validator)
    { 

        $validator->after(function ($validator) 
        {
            $user  = User::where( 'email', '=', request()->email )->first( );

            if( !$user ) 
            {

                $validator->errors()->add('email', 'Entered email does not exist.');

            }
            else if ($user && ! Hash::check( request()->password, $user->password)) 
            {
                
                $validator->errors()->add('password', 'Entered password is incorrect');

            }

        });

    }

}
