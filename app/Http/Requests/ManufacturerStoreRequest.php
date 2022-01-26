<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ManufacturerStoreRequest extends MainRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|unique:products|max:100|min:3',
            'description'   => 'required',
        ];
    }
}
