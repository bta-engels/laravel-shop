<?php

namespace App\Http\Requests;

class ProductUpdateRequest extends MainRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|max:100|min:3',
            'description'   => 'required',
            'category_id'   => 'nullable|numeric',
            'manufacturer_id'   => 'required',
        ];
    }
}
