<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemebrUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'first_name' => 'required | ',
            'last_name' => 'required | ',
            'mobile'=>'required|',
            'email'=>'required|',
            'address'=>'required|'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'  => 'The :attribute field is required.',
            'last_name.required'  => 'The :attribute field is required.',
            'mobile.required'  => 'The :attribute field is required.',
            'email.required'  => 'The :attribute field is required.',
            'address.required'  => 'The :attribute field is required.'

        ];
    }
}
