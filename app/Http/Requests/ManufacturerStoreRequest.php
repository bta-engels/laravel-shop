<?php

namespace App\Http\Requests;

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
            'name'          => 'required|unique:manufacturers|max:100|min:3',
            'description'   => 'required',
        ];
    }
}
