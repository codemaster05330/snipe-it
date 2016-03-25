<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SetupUserRequest extends Request
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
          'first_name' => 'required|string|min:1',
          'last_name' => 'required|string|min:1',
          'location_id' => 'numeric',
          'username' => 'required|string|min:2|unique:users,username,NULL,deleted_at',
          'email' => 'email|unique:users,email',
          'password' => 'required|min:6',
          'password_confirm' => 'required|min:6|same:password',
          'company_id' => 'integer',
        ];
    }

    public function response(array $errors)
    {
        return $this->redirector->back()->withInput()->withErrors($errors, $this->errorBag);
    }
}
