<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminMenu extends FormRequest
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
    public function rules(): array
    {
        return [
            'title_hi' => 'required|min:3',
            'description_hi' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'title_gu' => 'required',
            'description_gu' => 'required',
          
        ];
    }
    public function messages()
   
    {
        return [
            'title_hi.required' => trans('menus.title'),
            'description_hi.required' => trans('menus.description'),
            'title_en.required' => trans('menus.title'),
            'description_en.required' => trans('menus.description'),
            'title_gu.required' => trans('menus.title'),
            'description_gu.required' => trans('menus.description'),
            
        ];
    }
}
