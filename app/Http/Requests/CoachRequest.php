<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'coach_name' => 'required | ',
            'coach_num' => 'required | ',
            'sports_name'=>'required|',
            'designation'=>'required|'
        ];
    }

    public function messages()
    {
        return [
            'coach_name.required'  => 'The :attribute field is required.',
            'coach_num.required'  => 'The :attribute field is required.',
            'sports_name.required'  => 'The :attribute field is required.',
            'designation.required'  => 'The :attribute field is required.'

        ];
    }
}
