<?php

namespace App\Http\Requests;

use phpDocumentor\Reflection\Types\Nullable;

class ProductStoreRequest extends MainRequest
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
            'category_id'   => 'nullable|numeric',
            'manufacturer_id'   => 'required',
            'image' =>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
}
