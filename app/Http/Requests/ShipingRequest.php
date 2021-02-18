<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipingRequest extends FormRequest
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
            'id' =>'required|exists:settings',
            'plain_value'=>'required',
            'value'=>'nullable|numeric',

        ];
    }
    public function messages()
    {
        return [
            'value.required' =>  __('admin/sidebar.value_required')  ,
            'plain_value.required' => __('admin/sidebar.plain_value_numeric'),

        ];
    }
}