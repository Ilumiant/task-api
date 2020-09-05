<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Iluminate\Contracts\Validation\Validator;
use Iluminate\Http\Exceptions\HttpResponseException;

class UserCreateFormRequest extends FormRequest
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
            // "email" => 'required|email|min:7|unique:users',
            'email' => 'required|email|min:7|max:255|unique:users,email,NULL,id,deleted_at,NULL',
            "password" => 'required|string|min:6|confirmed',
            "role_id" => 'required|numeric',
            // "name" => 'min:2|string',
            // "lastname" => 'min:2|string',
            // "position" => 'string',
        ];
    }

}
