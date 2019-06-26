<?php

namespace CodeShopping\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
//         $id = $this->route('user');
        return [
            'name' => 'required|max:191',
          //  'email' => "required|max:191|email|unique:users,email,{$id}",
            'email' => "required|max:191|email|unique:users,email",
            'password' => 'required|min:4|max:16'
        ];
    }
}
