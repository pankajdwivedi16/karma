<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Request;

/**
 *
 */
trait Response
{

  protected function failedValidation(Validator $validator)
  {

    if ($this->ajax() || $this->wantsJson()) {

      $errors = [] ;
      foreach ($validator->errors()->getMessages() as $key => $value) {

        $errors[$key] = array_first($value) ? : '';
      
      }

      throw new HttpResponseException(
        response()->json([
          'status'  => false,
          'code'    => 200,
          'action'  => isset($this->action) ? $this->action : "",
          'message' => $validator->errors()->first(),
          'errors'  => (object)$errors,
          'data'    => ""
        ], 200) );
    
    }
    return $this->redirector->to($this->getRedirectUrl())
                            ->withInput($this->except($this->dontFlash))
                            ->withErrors($validator->errors(), $this->errorBag);
  }

}
