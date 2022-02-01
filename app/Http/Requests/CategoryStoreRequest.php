<?php

namespace App\Http\Requests;



class CategoryStoreRequest extends CategoryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|unique:categories|max:50|min:3',
        ];
    }
}
