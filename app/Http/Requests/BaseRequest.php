<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{

    public function failedValidation(Validator $validator)
    {
        flash('表单验证错误,info:' . $validator->errors()->first(), 'error');

        throw (new HttpResponseException(response()->json([
            'status_code' => 422,
            'message' => $validator->errors()->first(),
        ], 200)));
    }
}