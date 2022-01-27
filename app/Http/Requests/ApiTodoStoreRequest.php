<?php

namespace App\Http\Requests;

class ApiTodoStoreRequest extends ApiTodoRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text'   => 'required|unique:todos|max:100|min:3',
            'done'   => 'nullable|boolean',
        ];
    }
}
