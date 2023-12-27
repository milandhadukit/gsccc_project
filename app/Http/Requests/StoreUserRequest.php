<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'title_hi'       => 'required',
            'description_hi' => 'required',
            'title_en'       => 'required',
            'description_en' => 'required',
            'title_gu'       => 'required',
            'description_gu' => 'required',
        ];
    }

    public function messages()

    {
        return [
            'title_hi.reuired' => trans('group.key'),
            'description_hi.required' => trans('group.key'),
            'title_en.reuired' => trans('group.key'),
            'description_en.required' => trans('group.key'),
            'title_gu.reuired' => trans('group.key'),
            'description_gu.required' => trans('group.key'),
        ];
    }
}
