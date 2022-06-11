<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesPersonCreateRequest extends FormRequest
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
            'email' => 'required|string|max:128|unique:sales_people,email',
            'telephone' => 'required|digits:11',
            'current_routes' => 'required|string|max:128',
            'joined_date' => 'required|string|max:128',
            'comments' => 'nullable',
        ];
    }
}
