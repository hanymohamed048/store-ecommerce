<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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

            'name'=>'required',
            'email'=>'required|email|unique:admins,email,'.$this->id,
            'password'=>'nullable|confirmed|min:6'

        ];
    }
    public function messages()
    {
        return [
            'name.required' =>  __('admin/sidebar.name_required')  ,
            'email.required' => __('admin/sidebar.email'),
            'email.email' =>__('admin/sidebar.email email'),
            'email.unique' =>__('admin/sidebar.email unique'),
            'password.confirmed' =>__('admin/sidebar.password confirmed'),
        ];
    }
}
