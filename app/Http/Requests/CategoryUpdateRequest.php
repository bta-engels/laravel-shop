<?php

namespace App\Http\Requests;



class CategoryUpdateRequest extends CategoryRequest
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
        ];
    }
}