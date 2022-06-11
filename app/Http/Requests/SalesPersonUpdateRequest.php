<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SalesPersonUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:128',
            'email' => [
                'required',
                'string',
                'max:128',
                Rule::unique('sales_people', 'id')->ignore($this->id)
            ],
            'telephone' => 'required|digits:11',
            'current_routes' => 'required|string|max:128',
            'comments' => 'nullable',
        ];
    }
}
